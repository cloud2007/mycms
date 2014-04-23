<?php

/**
 * menu
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class PassportAction extends AdminAction {

    function __construct() {
        parent::__construct();
    }

    function index() {
        $view = new View('passport/passportList');
        $view->set('user', $this->UserInfo);

        $Order = new OrderTable();
        $PageSize = 20;
        $PageNo = (int) @$_GET['PageNo'] ? (int) $_GET['PageNo'] : 1;
        $PageNum = ($PageNo - 1) * $PageSize;
        $Pager = new Pager();
        $PagerData = $Pager->getPagerData($Order->count(), $PageNo, '/admin.php/Passport?', 2, $PageSize); //参数记录数 当前页数 链接地址 显示样式 每页数量

        $Options = array();

        if ($_POST['w'])
            $Options['whereAnd'][] = array('orderid', 'like \'%' . $_POST['w'] . '%\' or `taobaoid` like \'%' . $_POST['w'] . '%\' or `teamid` like \'%' . $_POST['w'] . '%\' or `content` like \'%' . $_POST['w'] . '%\'');
        if ($_POST['begin'])
            $Options['whereAnd'][] = array('okdate', '>' . strtotime($_POST['begin']));
        if ($_POST['end'])
            $Options['whereAnd'][] = array('okdate', '<' . strtotime($_POST['end']));

        $Options['order'] = array('id' => 'desc');
        $Options['limit'] = "{$PageNum},{$PageSize}";

        $res = $Order->find($Options);
        $view->set('List', $res);
        $view->set('PagerData', $PagerData);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * new 表单构造
     */
    function add() {
        $view = new View('passport/passportAdd');
        $view->set('user', $this->UserInfo);

        $data = new OrderTable();
        if (@$_GET[1] || is_int(@$_GET[1]))
            $data->load($_GET[1]);
        $view->set('datainfo', $data);
        $view->set('PageNo', $_GET['PageNo']);
        $view->renderHeaderFooterHtml($view);
    }

    /**
     * passport 保存
     */
    function orderSave() {
        $Order = new OrderTable();
        if ($_POST['id'])
            $Order->id = $_POST['id'];
        $Order->user_id = $_POST['user_id'];
        $Order->uname = $_POST['uname'];
        $Order->utel = $_POST['utel'];
        $Order->orderid = $_POST['orderid'];
        $Order->okdate = strtotime($_POST['okdate']);
        $Order->countdate = strtotime($_POST['countdate']);
        $Order->recivedate = strtotime($_POST['recivedate']);
        $Order->sentdate = strtotime($_POST['sentdate']);
        $Order->type = $_POST['type'];
        $Order->num = $_POST['num'];
        $Order->sendtype = $_POST['sendtype'];
        $Order->paytype = $_POST['paytype'];
        $Order->safe = $_POST['safe'];
        $Order->taobaoid = $_POST['taobaoid'];
        $Order->teamid = $_POST['teamid'];
        $Order->price = $_POST['price'];
        $Order->pay = $_POST['pay'];
        $Order->addr = $_POST['addr'];
        $Order->status = $_POST['status'];
        $content = $_POST['content'];
        $contentArr = explode("\n", $content);
        $resultArr = array();
        foreach ($contentArr as $val) {
            $varArr = array();
            $varArr = explode("-", $val);
            if (trim($varArr[1]) == NULL)
                $resultArr[] = trim($varArr[0]) . '-' . $_POST['utel'];
            else
                $resultArr[] = $val;
        }
        $Order->content = implode("\n", $resultArr);
        $Order->beizhu = $_POST['beizhu'];
        if ($Order->save()) {
            $passportinfo = new PassportinfoTable();
            $res = $passportinfo->find(
                    array(
                        'whereAnd' => array(array('order_id', '=' . $Order->id)),
                        'order' => 'status desc',
                        'limit' => '1',
                    )
            );
            $status = $res ? $res[0]->status : 0;
            $passportinfo->order_id = $Order->id;
            $passportinfo->user_id = $this->UserInfo->userID;
            $passportinfo->status = $Order->status;
            $passportinfo->beizhu = $Order->beizhu;
            if ($Order->status > $status)
                $passportinfo->save();
        }
        ShowMsg('保存成功', '/admin.php/Passport?PageNo=' . $_POST['PageNo']);
    }

    /**
     * 删除一条记录
     */
    function delete() {
        $PageNo = $_GET['PageNo'];
        $id = $_GET[1];
        if ($id && is_numeric($id)) {
            $News = new OrderTable();
            $News->delete($id);
            ShowMsg('删除成功', '/admin.php/Passport/?PageNo=' . $PageNo, 0, 1);
        } else {
            die;
        }
    }

    /**
     * 删除记录集合
     */
    function deletes() {
        $id = $_POST['checkID'];
        if (is_array($id)) {
            $News = new OrderTable();
            $News->deletes('id in(' . implode(',', $id) . ')');
            ShowMsg('删除成功', '/admin.php/Passport', 0, 1);
        } else {
            die;
        }
    }

    function status() {
        $Order = new OrderTable();
        if ($_POST['id'])
            $Order->id = $_POST['id'];
        $Order->status = $_POST['status'];
        if ($Order->save()) {
            $passportinfo = new PassportinfoTable();
            $res = $passportinfo->find(
                    array(
                        'whereAnd' => array(array('order_id', '=' . $Order->id)),
                        'order' => 'status desc',
                        'limit' => '1',
                    )
            );
            $status = $res ? $res[0]->status : 0;
            $passportinfo->order_id = $Order->id;
            $passportinfo->user_id = $this->UserInfo->userID;
            $passportinfo->status = $Order->status;
            $passportinfo->beizhu = $Order->beizhu;
            if ($Order->status > $status)
                $passportinfo->save();
        }
        echo '<font color="green">√</font>';
    }

    /**
     * 订单记录
     */
    function info() {
        $str = '';
        if ($_POST['id']) {
            $order = new OrderTable();
            $res1 = $order->load($_POST['id']);
        }
        if ($res1) {
            $passportinfo = new PassportinfoTable();
            $res = $passportinfo->find(
                    array(
                        'whereAnd' => array(array('order_id', '=' . $res1->id)),
                    )
            );
        }
        if ($res) {
            foreach ($res as $v) {
                $str .= '<p>';
                $str .= $v->creatTime();
                $str .= '　' . self::$StatusArray[$v->status]['text'];
                $str .= '　操作员：' . $v->user_id;
                $v->beizhu ? $str .= '<br />备注:' . $v->beizhu : NULL;
                $str .= '</p>';
            }
        }
        echo $str ? $str : 'NULL';
    }

    function execl() {
        $order = new OrderTable();
        $data = $order->find();

        //$str = "姓名,性别,年龄\n";
        //$str = iconv('utf-8', 'gb2312', $str);
        $str = 'ID,成交日期,订单号,统计日期,收件日期,客人名字,签证种类,数量,送签日期,快递方式,付款方式,保险,淘宝ID,团号,应收款,是否付款,电话,收件地址,备注' . "\n";

        foreach ($data as $v) {
            $arr = array();
            foreach (explode("\n", $v->content) as $val) {
                $o = explode('-', $val);
                $arr[] = $o[0];
            }
            $content = implode('|', $arr);
            $str .= $v->id . ",";
            $str .= $v->okdate() . ",";
            $str .= str_replace(',', '-', $v->orderid) . ",";
            $str .= $v->okdate() . ",";
            $str .= $v->countdate() . ",";
            $str .= $v->recivedate() . ",";
            $str .= $v->sentdate() . ",";
            $str .= $v->type . ",";
            $str .= $v->num . ",";
            $str .= $v->sendtype . ",";
            $str .= $v->paytype . ",";
            $str .= $v->safe . ",";
            $str .= $v->taobaoid . ",";
            $str .= $v->teamid . ",";
            $str .= $v->price . ",";
            $str .= $v->pay . ",";
            $str .= $v->addr . ",";
            $str .= $v->status . ",";
            $str .= $content . ",";
            $str .= $v->beizhu . ",";
            $str .= "\n";
        }
        $filename = date('Ymd') . '.csv'; //设置文件名
        file_put_contents($filename, iconv('utf-8', 'gb2312', $str)); //导出
    }

    function exportExcel($data = array(), $title = array(), $filename = 'report') {
        header("Content-type:application/octet-stream");
        header("Accept-Ranges:bytes");
        header("Content-type:application/vnd.ms-excel");
        header("Content-Disposition:attachment;filename=" . $filename . ".xls");
        header("Pragma: no-cache");
        header("Expires: 0");
        //导出xls 开始
        $order = new OrderTable();
        $data = $order->find();
        if (!empty($title)) {
            foreach ($title as $k => $v) {
                $title[$k] = iconv("UTF-8", "GB2312", $v);
            }
            $title = implode("\t", $title);
            echo "$title\n";
        }
        if (!empty($data)) {
            foreach ($data as $key => $val) {
                foreach ($val as $ck => $cv) {
                    $data[$key][$ck] = iconv("UTF-8", "GB2312", $cv);
                }
                $data[$key] = implode("\t", $data[$key]);
            }
            echo implode("\n", $data);
        }
    }

    function phpexcel() {
        require(ROOT_PATH . '/Lib/PHPExcel/Autoloader.php');
        require_once ROOT_PATH . '/Lib/PHPExcel.php';
        require_once ROOT_PATH . '/Lib/PHPExcel/Reader/Excel2007.php';
        require_once ROOT_PATH . '/Lib/PHPExcel/Reader/Excel5.php';
        include_once ROOT_PATH . '/Lib/PHPExcel/IOFactory.php';

        $objPHPExcel = new PHPExcel();
        $objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
        $objPHPExcel->setActiveSheetIndex(0)->setCellValue('A1', iconv('gbk', 'utf-8', '中文Hello'))->setCellValue('B2', 'world!')->setCellValue('C1', 'Hello');
        $objPHPExcel->setActiveSheetIndex(0);
        $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment;filename="Products_' . date('dMy') . '.xls"');
        header('Cache-Control: max-age=0');
        $objWriter->save('php://output');
    }

}
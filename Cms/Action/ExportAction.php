<?php

/**
 * system menu core
 * @author:Laven<190296465@vip.qq.com>
 * @copyright:Copyright 2009 Laven
 * @create:2010-11-13
 * @modify:2014-01-03
 */
class ExportAction extends Action {

	function index() {
		require_once LIB_PATH . '/PHPExcel.php';
		$code = String::randString(4, 1);
		$filename = iconv("utf-8", "gb2312", "统计报表" . date('Ymd', time()) . $code); //防止乱码
		$PHPExcel = new PHPExcel();
		$PHPExcel->getProperties()->setCreator("Tcit123")
				->setLastModifiedBy("Tcit123")
				->setTitle("Tcit123")
				->setSubject()
				->setDescription()
				->setKeywords()
				->setCategory();
		$PHPExcel->setActiveSheetIndex(0);
		$PHPExcel->getActiveSheet()->setTitle('统计报表');

		//填入编号
		$PHPExcel->getActiveSheet()->setCellValue('A1', '成交日期');
		$PHPExcel->getActiveSheet()->setCellValue('B1', '订单号');
		$PHPExcel->getActiveSheet()->setCellValue('C1', '统计日期');
		$PHPExcel->getActiveSheet()->setCellValue('D1', '收件日期');
		$PHPExcel->getActiveSheet()->setCellValue('E1', '联系人姓名');
		$PHPExcel->getActiveSheet()->setCellValue('F1', '签证种类');
		$PHPExcel->getActiveSheet()->setCellValue('G1', '数量');
		$PHPExcel->getActiveSheet()->setCellValue('H1', '送签日期');
		$PHPExcel->getActiveSheet()->setCellValue('I1', '快递方式');
		$PHPExcel->getActiveSheet()->setCellValue('J1', '付款方式');
		$PHPExcel->getActiveSheet()->setCellValue('K1', '保险');
		$PHPExcel->getActiveSheet()->setCellValue('L1', '淘宝ID');
		$PHPExcel->getActiveSheet()->setCellValue('M1', '团号');
		$PHPExcel->getActiveSheet()->setCellValue('N1', '应收款');
		$PHPExcel->getActiveSheet()->setCellValue('O1', '是否付款');
		$PHPExcel->getActiveSheet()->setCellValue('P1', '电话');
		$PHPExcel->getActiveSheet()->setCellValue('Q1', '收件地址');
		$PHPExcel->getActiveSheet()->setCellValue('R1', '备注');

		//设置单元格宽度
		$PHPExcel->getActiveSheet()->getColumnDimension('A')->setWidth(15);
		$PHPExcel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
		$PHPExcel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
		$PHPExcel->getActiveSheet()->getColumnDimension('D')->setWidth(15);
		$PHPExcel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
		$PHPExcel->getActiveSheet()->getColumnDimension('F')->setWidth(10);
		$PHPExcel->getActiveSheet()->getColumnDimension('G')->setWidth(5);
		$PHPExcel->getActiveSheet()->getColumnDimension('H')->setWidth(15);
		$PHPExcel->getActiveSheet()->getColumnDimension('I')->setWidth(10);
		$PHPExcel->getActiveSheet()->getColumnDimension('J')->setWidth(10);
		$PHPExcel->getActiveSheet()->getColumnDimension('K')->setWidth(10);
		$PHPExcel->getActiveSheet()->getColumnDimension('L')->setWidth(15);
		$PHPExcel->getActiveSheet()->getColumnDimension('M')->setWidth(15);
		$PHPExcel->getActiveSheet()->getColumnDimension('N')->setWidth(15);
		$PHPExcel->getActiveSheet()->getColumnDimension('O')->setWidth(10);
		$PHPExcel->getActiveSheet()->getColumnDimension('P')->setWidth(20);
		$PHPExcel->getActiveSheet()->getColumnDimension('Q')->setWidth(20);
		$PHPExcel->getActiveSheet()->getColumnDimension('R')->setWidth(50);

		//设置表头行高
		$PHPExcel->getActiveSheet()->getRowDimension(1)->setRowHeight(22);
		$PHPExcel->getActiveSheet()->getRowDimension(2)->setRowHeight(22);

		//设置居中、垂直居中
		$PHPExcel->getActiveSheet()->getStyle('A1:R1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
		$PHPExcel->getActiveSheet()->getStyle('A1:R1')->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);

		//设置字体样式
		$PHPExcel->getActiveSheet()->getStyle('A1:R1')->getFont()->setName('微软雅黑');


		$order = new OrderTable();
		if ($_POST['begin'])
            $Options['whereAnd'][] = array('okdate', '>' . strtotime($_POST['begin']));
        if ($_POST['end'])
            $Options['whereAnd'][] = array('okdate', '<' . strtotime($_POST['end']));
		$data = $order->find($Options);
		$arr = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r');
		foreach ($data as $k => $v) {
			$PHPExcel->getActiveSheet()->setCellValue('A' . ($k + 2), $v->okdate()); //成交日期
			$PHPExcel->getActiveSheet()->setCellValueExplicit('B' . ($k + 2), $v->orderid, PHPExcel_Cell_DataType::TYPE_STRING);
			$PHPExcel->getActiveSheet()->setCellValue('C' . ($k + 2), $v->countdate()); //统计日期
			$PHPExcel->getActiveSheet()->setCellValue('D' . ($k + 2), $v->recivedate()); //收件日期
			$PHPExcel->getActiveSheet()->setCellValue('E' . ($k + 2), $v->uname); //客人名字
			$PHPExcel->getActiveSheet()->setCellValue('F' . ($k + 2), $v->type); //签证种类
			$PHPExcel->getActiveSheet()->setCellValue('G' . ($k + 2), $v->num); //数量
			$PHPExcel->getActiveSheet()->setCellValue('H' . ($k + 2), $v->sentdate()); //送签日期
			$PHPExcel->getActiveSheet()->setCellValue('I' . ($k + 2), $v->sendtype); //快递方式
			$PHPExcel->getActiveSheet()->setCellValue('J' . ($k + 2), $v->paytype); //付款方式
			$PHPExcel->getActiveSheet()->setCellValue('K' . ($k + 2), $v->safe); //保险
			$PHPExcel->getActiveSheet()->setCellValue('L' . ($k + 2), $v->taobaoid); //淘宝ID
			$PHPExcel->getActiveSheet()->setCellValue('M' . ($k + 2), $v->teamid); //团号
			$PHPExcel->getActiveSheet()->setCellValue('N' . ($k + 2), $v->price); //应收款
			$PHPExcel->getActiveSheet()->setCellValue('O' . ($k + 2), $v->pay); //是否付款
			$PHPExcel->getActiveSheet()->setCellValueExplicit('P' . ($k + 2), $v->utel, PHPExcel_Cell_DataType::TYPE_STRING); //电话
			$PHPExcel->getActiveSheet()->setCellValue('Q' . ($k + 2), $v->addr); //收件地址
			$PHPExcel->getActiveSheet()->setCellValue('R' . ($k + 2), $v->beizhu); //备注

			foreach ($arr as $v) {
				$PHPExcel->getActiveSheet()->getStyle($v . ($k + 2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
				$PHPExcel->getActiveSheet()->getStyle($v . ($k + 2))->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
				$PHPExcel->getActiveSheet()->getStyle($v . ($k + 2))->getFont()->setName('微软雅黑');
			}
			$PHPExcel->getActiveSheet()->getStyle('B' . ($k + 2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$PHPExcel->getActiveSheet()->getStyle('R' . ($k + 2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
			$PHPExcel->getActiveSheet()->getStyle('Q' . ($k + 2))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
		}

		$objWriter = new PHPExcel_Writer_Excel5($PHPExcel);
		$objWriter->save(ROOT_PATH . 'Uploads/execl/' . $filename . '.xls');
		echo iconv("gb2312", "utf-8", $filename).'.xls';
		die;
		header("Content-type:application/octet-stream");
		header("Accept-Ranges:bytes");
		header("Content-type:application/vnd.ms-excel");
		header("Content-Disposition:attachment;filename=" . $filename . ".xls");
		header("Pragma: no-cache");
		header("Expires: 0");
		$objWriter->save('php://output');
	}

}

?>
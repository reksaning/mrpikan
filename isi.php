<?php
	if ($level=='tpi') {
		if($_GET['isi']=="tabel1"){
		include "tabel1.php";
		}
		if($_GET['isi']=="input1"){
			include "transaksi1.php";
		}
		if($_GET['isi']=="tabel2"){
			include "tabel2.php";
		}
		if($_GET['isi']=="input2"){
			include "transaksi2.php";
		}
		if($_GET['isi']=="tabel0"){
			include "tabel0.php";
		}
		if($_GET['isi']=="tabel3"){
			include "tabel3.php";
		}
		if($_GET['isi']=="input3"){
			include "laporan.php";
		}
		if($_GET['isi']=="awal"){
			include "dashboard.php";
		}
	}
	
	if ($level=='admin') {
		if($_GET['isi']=="tabel_n"){
			include "tabel_n.php";
		}
		if($_GET['isi']=="tabel_pk"){
			include "tabel_pk.php";
		}
		if($_GET['isi']=="tabel_pd"){
			include "tabel_pd.php";
		}
		if($_GET['isi']=="tabel_sk"){
			include "tabel_sk.php";
		}
		if($_GET['isi']=="prof_mar"){
			include "prof_mar.php";
		}
		if($_GET['isi']=="tambahn"){
			include "tambahn.php";
		}
		if($_GET['isi']=="tambahpk"){
			include "tambahpk.php";
		}
		if($_GET['isi']=="tambahpd"){
			include "tambahpd.php";
		}
		if($_GET['isi']=="tambahsk"){
			include "tambahsk.php";
		}
	}
	

?>
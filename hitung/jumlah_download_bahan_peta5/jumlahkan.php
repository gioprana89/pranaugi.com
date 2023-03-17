<?php
	$jumlah_tekan = @file_get_contents('jumlah_download_bahan_peta1.txt');
	$jumlah_tekan++;
	@file_put_contents('jumlah_download_bahan_peta1.txt', $jumlah_tekan++);
	
	header('Location: https://drive.google.com/file/d/1oF6OVxbaQhQ3mBvmuzMOpOILR9FmNrpA/view?usp=sharing'); //alamat link download di sini ya bang
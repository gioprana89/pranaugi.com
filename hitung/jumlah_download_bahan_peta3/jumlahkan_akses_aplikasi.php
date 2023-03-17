<?php
	$jumlah_tekan = @file_get_contents('jumlah_download_aplikasi_peta1.txt');
	$jumlah_tekan++;
	@file_put_contents('jumlah_download_aplikasi_peta1.txt', $jumlah_tekan++);
	
	header('Location: https://indcomp.shinyapps.io/rshinyappsmap3/'); //alamat link download di sini ya bang
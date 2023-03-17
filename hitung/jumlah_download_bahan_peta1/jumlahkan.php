<?php
	$jumlah_tekan = @file_get_contents('jumlah_download_bahan_peta1.txt');
	$jumlah_tekan++;
	@file_put_contents('jumlah_download_bahan_peta1.txt', $jumlah_tekan++);
	
	header('Location: https://drive.google.com/file/d/1Or5joCwrM5N0vyDo-OuisQwqwlT9cAQJ/view?usp=sharing'); //alamat link download di sini ya bang
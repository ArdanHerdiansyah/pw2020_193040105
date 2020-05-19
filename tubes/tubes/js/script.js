// ambil elemen yang dibutuhkan
var keyword = document.getElementById('keyword');
var tombolCari = document.getElementById('tombol-cari');
var container = document.getElementById('container');

// menambah event ketika keyword ditulis
keyword.addEventListener('keyup', function() {
	
	// membuat objek ajax
	var xhr = new XMLHttpRequest();

	// cek kesiapan ajax
	xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status ==  200) {
			container.innerHTML = xhr.responseText;
		}
	}

	// eksekusi ajax
	xhr.open('GET', '../ajax/pakaian.php?keyword=' + keyword.value, true);
	xhr.send();


});
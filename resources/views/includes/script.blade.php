  <!-- Bootstrap core JavaScript-->
  <script src="/vendor/jquery/jquery.min.js"></script>
  <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/vendor/chart.js/Chart.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/js/demo/chart-area-demo.js"></script>
  <script src="/js/demo/chart-pie-demo.js"></script>

  {{-- custom script js --}}
  <script>
   function previewImage(event) {
    const fileInput = event.target;
    const file = fileInput.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function (e) {
            const imagePreview = document.getElementById('imagePreview');
            imagePreview.innerHTML = '<img src="' + e.target.result + '" alt="Preview" />';
        };

        reader.readAsDataURL(file);
    }
}


// loading overlay pages
    function submitForm() {
        // Tampilkan overlay loading saat form dikirim
        document.getElementById('loadingOverlay').style.display = 'flex';
        // Submit form secara asinkron menggunakan JavaScript
        document.getElementById('productForm').submit();
    }

// currency input 1

var jual = document.getElementById('jual');
jual.addEventListener('keyup', function(e)
{
    jual.value = formatRupiah(this.value, 'Rp. ');
});

function formatRupiah(angka, prefix)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split    = number_string.split(','),
        sisa     = split[0].length % 3,
        rupiah     = split[0].substr(0, sisa),
        ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ?  rupiah : '');
}

   // currency input 2
   var beli = document.getElementById('beli');
beli.addEventListener('keyup', function(e)
{
    beli.value = Rupiah(this.value, 'Rp. ');
});

function Rupiah(angka, prefix)
{
    var number_string = angka.replace(/[^,\d]/g, '').toString(),
        split    = number_string.split(','),
        sisa     = split[0].length % 3,
        rupiah     = split[0].substr(0, sisa),
        ribuan     = split[0].substr(sisa).match(/\d{3}/gi);
        
    if (ribuan) {
        separator = sisa ? '.' : '';
        rupiah += separator + ribuan.join('.');
    }
    
    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
    return prefix == undefined ? rupiah : (rupiah ?  rupiah : '');
}
		
        
  </script>




<footer class="main-footer">
    Copyright &copy; <?= date('Y') ?> Test
  
</footer>
</div>
</div>

<!-- Bootstrap core JavaScript-->

<script src="<?= base_url('assets/'); ?>js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap Core JS -->
<script src="<?= base_url('assets/'); ?>js/bootstrap.bundle.min.js"></script>

<!-- Slimscroll JS -->
<script src="<?= base_url('assets/'); ?>js/jquery.slimscroll.min.js"></script>




<!-- Custom JS -->
<script src="<?= base_url('assets/'); ?>js/app.js"></script>

<script>
  $('.custom-file-input').on('change', function() {
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>
</body>

</html>
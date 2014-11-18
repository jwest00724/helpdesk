<!--
<footer>
<div class="row">
<div class="12-small columns">
<p class="footer">Copyright &copy; 2014 - Ben Crisp</p>
</div>
</div>
</footer>
-->
<!-- End Page Content -->

<!-- Call in jquery and js -->
<script src="../js/vendor/jquery.js"></script>
<script src="../js/foundation.min.js"></script>
<script>
    $(document)
    .foundation({
        abide : {
            patterns: {
                bj_room_number: /(G|F|S)(\d{3})$/
            }
        }
    });
</script>
</body>
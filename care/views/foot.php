<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
<?php
foreach ($script as $src) {
    echo "
    <script src='$src' defer></script>";
    }
?>
</body>

</html>

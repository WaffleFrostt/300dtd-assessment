
<script>
    document.getElementById('password').addEventListener('input', function() {
        var strength = document.getElementById('password').value.length;
        var bar = document.getElementById('password-strength-bar');
        bar.style.width = (strength / 8) * 100 + '%';
    });
</script>



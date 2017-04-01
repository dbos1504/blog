<h4>SEARCH FOR POST</h4>
<form action="#" method="get" onsubmit="return validate(this)">
    <input type="text" name="bl_search" onblur="validate(this)" placeholder="Search for posts...">
    <input type="submit" name="bl_submit" value="SEARCH">
</form>
<script type="text/javascript">
    function validate(f) {
        if (f.value == "") {
            f.style.borderColor = 'red';
            return false;
        } else
            f.style.borderColor = '';
        return true;
    }
</script>
<h1>CONTACT | <span>email us about everything</span></h1>
<div class="contact">
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam dapibus arcu vel dui tristique, sit amet rutrum purus pharetra.</p>
    <form action="#" method="post">
        <input type="text" name="ct_name" onblur="validate(this)" placeholder="Enter your name..." value="<?php if (isset($_POST['ct_name'])) { echo $_POST['ct_name']; } ?>"><br>
        <input type="email" name="ct_email" onblur="validate(this)" placeholder="Enter your email..." value="<?php if (isset($_POST['ct_email'])) { echo $_POST['ct_email']; } ?>"><br>
        <textarea name="ct_message" onblur="validate(this)" placeholder="Enter your message..." ></textarea><br>
        <input type="submit" name="ct_submit" value="SEND MESSAGE">
        <?php
            if (isset($_POST['ct_submit'])) {
                if (!empty($_POST['ct_name']) && !empty($_POST['ct_email']) && !empty($_POST['ct_message'])) {
                    $add_message->add_message();
                } else
                    echo "<p style='color: red;'>Please fill empty fields.</p>";
            }
        ?>
    </form>
</div>
<script type="text/javascript">
    function validate(f) {
        if (f.value == "") {
            f.style.borderColor = 'red';
        } else
            f.style.borderColor = '';
    }
</script>

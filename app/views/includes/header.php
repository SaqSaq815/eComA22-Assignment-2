<div class="nav">
    <a href='/Main/index'>Home</a>
    <?php if(isset($_SESSION['user_id'])) { ?>
        <a href="/Profile/index">Profile</a>
        <a href="/User/logout">Log out</a>
    <?php } else { ?>
        <a href="/User/login">Log In</a>
        <a href="/User/register">Register</a>
    <?php } ?>
</div>
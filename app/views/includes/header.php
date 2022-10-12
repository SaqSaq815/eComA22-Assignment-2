<ul class="navbar">
    <li><a href='/Main/index'>Home</a></li>
    <?php if(isset($_SESSION['user_id'])) { ?>
        <li><a href="/Publication/create">Create a Post</a></li>
        <li><a href="/Profile/index">Profile</a></li>
        <li style="float:right"><a href="/User/logout">Log out</a></li>
    <?php } else { ?>
        <li style="float:right"><a href="/User/login">Log In</a></li>
        <li style="float:right"><a href="/User/register">Register</a></li>
    <?php } ?>
</ul>
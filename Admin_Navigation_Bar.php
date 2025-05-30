<style>
    nav {
        display: flex;
        justify-content: space-between;
        /* Ensures logo on left, links on the right */
        align-items: center;
        /* Vertically centers the items */
        width: 96.5%;
        background: linear-gradient(to right, rgb(52, 109, 255), navy);
        border: 3px solid white;
        padding: 10px 20px;
    }

    #SIB {
        color: white;
        font-family: 'Georgia', serif;
        font-size: 40px;
        font-weight: bold;
        margin: 0;
        flex-grow: 1;
    }

    nav .a_1 {
        margin: 0 15px;
        font-size: 20px;
        color: white;
        font-family: 'Georgia', serif;
        text-decoration: none;
        position: relative;
    }

    .a_1::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -3px;
        width: 0%;
        height: 2px;
        background: white;
        transition: width 0.3s ease-in-out;
    }

    .a_1:hover::after {
        width: 100%;
    }
</style>


<nav>
    <p id="SIB"> Seoul Infinity Bank </p>

    <a href="Home_Page.php" target="_blank" class="a_1"> Home </a>
    <a href="Admin_Dashboard.php" target="_blank" class="a_1"> Admin Dashboard </a>
    <a href="Admin_Logout.php" target="_self" class="a_1"> LogOut </a>
</nav>
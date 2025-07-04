<style>
    nav {
        display: flex;
        justify-content: space-between;
        align-items: center;
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

    nav a {
        margin: 0 15px;
        font-size: 20px;
        color: white;
        font-family: 'Georgia', serif;
        text-decoration: none;
        position: relative;
    }

    a::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: -3px;
        width: 0%;
        height: 2px;
        background: white;
        transition: width 0.3s ease-in-out;
    }

    a:hover::after {
        width: 100%;
    }
</style>


<nav>
    <p id="SIB"> Seoul Infinity Bank </p>
    <a href="Home_Page.php" target="_blank"> Home </a>
    <a href="User_Login.php" target="_blank"> User Login </a>
    <a href="Create_Account_Page.php" target="_blank"> Create Account </a>
    <a href="Admin_Login.php" target="_blank"> Admin Login </a>
    <a href="Services.php" target="_blank"> Services </a>
    <a href="About_Page.php" target="_blank"> About </a>
</nav>
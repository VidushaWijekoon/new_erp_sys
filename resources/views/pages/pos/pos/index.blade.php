@include('libraries.styles')
@include('libraries.styles')
@section('title', 'POS')
<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
        <a href="#" class="nav-link h3 text-white my-2">
            Responsive </br>SideBar Nav
        </a>
        <li href="#" class="nav-link">
            <i class="bx bxs-dashboard"></i>
            <span class="mx-2">Home</span>
        </li>
        <li href="#" class="nav-link">
            <i class="bx bx-user-check"></i>
            <span class="mx-2">Profile</span>
        </li>
        <li href="#" class="nav-link">
            <i class="bx bx-conversation"></i>
            <span class="mx-2">Contact</span>
        </li>
    </ul>

    <span href="#" class="nav-link h4 w-100 mb-5">
        <a href=""><i class="bx bxl-instagram-alt text-white"></i></a>
        <a href=""><i class="bx bxl-twitter px-2 text-white"></i></a>
        <a href=""><i class="bx bxl-facebook text-white"></i></a>
    </span>
</div>

<!-- Main Wrapper -->
<div class="p-1 my-container active-cont">
    <!-- Top Nav -->
    <nav class="navbar top-navbar navbar-light bg-light px-5">
        <a class="btn border-0" id="menu-btn"><i class="bx bx-menu"></i></a>
    </nav>
</div>

<style>
    .side-navbar {
        width: 250px;
        height: 100%;
        position: fixed;
        margin-left: -300px;
        background-color: #100901;
        transition: 0.5s;
    }

    .nav-link:active,
    .nav-link:focus,
    .nav-link:hover {
        background-color: #ffffff26;
    }

    .my-container {
        transition: 0.4s;
    }

    .active-nav {
        margin-left: 0;
    }

    /* for main section */
    .active-cont {
        margin-left: 250px;
    }

    #menu-btn {
        background-color: #100901;
        color: #fff;
        margin-left: -62px;
    }

    .my-container input {
        border-radius: 2rem;
        padding: 2px 20px;
    }
</style>
@section('content')
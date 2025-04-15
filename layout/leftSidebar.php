<style>
    .sidebar {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        padding: 10px 20px;
        width: 380px;
        min-height: 100vh;
        border-right: 1px solid #ccc;
        position: sticky;
        top: 0;
    }


    .sidebar img {
        width: 36px;
        height: 40px;
        margin-right: 10px;
    }

    .sidebarOption {
        display: flex;
        align-items: center;
        padding: 15px;
        cursor: pointer;
    }

    .sidebarOption a {
        display: flex;
        align-items: center;
        color: white;
    }

    .sidebarOption h6 {
        font-size: 20px;
        font-style: normal;
        margin-right: 20px;
    }

    .sidebarOption:hover {
        background-color: var(--twitter-background);
        border-radius: 30px;
        transition: color 100ms ease-out;
    }

    .posting {
        width: 100%;
        background-color: black;
        border: none;
        color: white;
        font-weight: 900;
        border-radius: 30px;
        height: 50px;
        margin-top: 20px;
        cursor: pointer;
    }

    .profilsidebar {
        display: flex;
        margin-right: 15px;
        margin-top: 50px;
    }

    .poto img {
        width: 40px;
        height: 40px;
        margin-right: 10px;
    }

    .profilname {
        margin-left: 2px;
    }

    #NicknameSB {
        font-weight: bold;
    }

    #UsernameSB {
        font-size: small;
    }

    .logo {
        width: 40px;
    }
</style>

<div class="sidebar">
    <div class="logo">
        <img src="assets/devicon--twitter.png" />
    </div>

    <div class="sidebarOption">
        <a href="#"><img src="assets/home.png" alt="Home"></a>
        <h6>Beranda</h6>
    </div>
    <div class="sidebarOption">
        <a href="#"><img src="assets/search.png" alt="Explore"></a>
        <h6>Jelajahi</h6>
    </div>
    <div class="sidebarOption">
        <a href="#"><img src="assets/notif.png" alt="Notifications"></a>
        <h6>Notifikasi</h6>
    </div>
    <div class="sidebarOption">
        <a href="#"><img src="assets/pesan.png" alt="Messages"></a>
        <h6>Pesan</h6>
    </div>
    <div class="sidebarOption">
        <a href="#"><img src="assets/people.png" alt="Communities"></a>
        <h6>Komunitas</h6>
    </div>
    <div class="sidebarOption">
        <a href="#"><img src="assets/person.png" alt="Profile"></a>
        <h6>Profil</h6>
    </div>
    <div class="sidebarOption">
        <a href="#"><img src="assets/more.png" alt="More"></a>
        <h6>Lainya</h6>
    </div>

    <button class="posting">Posting</button>

    <div class="profilsidebar">
        <div class="poto">
            <img src="assets/profile.png" alt="Profile">
        </div>
        <div class="profilname">
            <h7 id="NicknameSB">andalan orangtua</h7>
            <p id="UsernameSB">@davinrhmd</p>
        </div>
    </div>
</div>
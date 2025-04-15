<style>
    .rightsidebar {
        width: 380px;
        padding: 10px;
        position: fixed;
        right: 0;
        top: 0;
        height: 100vh;
        overflow-y: auto;
        border-left: 2px solid #ccc;
    }

    #rightSearch {
        border: 1px solid grey;
        border-radius: 25px;
        width: 100%;
        height: 35px;
        text-align: center;
        padding: 8px;
        color: grey;
        cursor: pointer;
        margin-bottom: 20px;
    }

    .referensi1,
    .trending {
        border: 1px solid gray;
        width: 100%;
        border-radius: 15px;
        margin-bottom: 20px;
    }

    #yml,
    #tfy {
        font-family: sans-serif;
        font-size: x-large;
        padding: 10px;
        font-weight: bold;
        color: black;
    }

    .user {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        margin: 10px;
    }

    .user img {
        width: 45px;
        height: 45px;
        border-radius: 50%;
        margin-right: 10px;
    }

    .user-info {
        flex-grow: 1;
    }

    .name {
        font-size: 14px;
        font-weight: bold;
        margin: 0;
        color: black;
    }

    .username {
        font-size: 13px;
        color: gray;
        margin: 0;
    }

    .follow-btn {
        background: black;
        color: white;
        border: none;
        padding: 6px 12px;
        border-radius: 20px;
        font-size: 14px;
        cursor: pointer;
    }

    .show-more {
        display: block;
        font-size: 14px;
        color: #1DA1F2;
        text-decoration: none;
        margin: 10px;
    }

    .trend {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 10px 0;
        border-bottom: 1px solid #E1E8ED;
        margin: 10px;
    }

    .trend:last-child {
        border-bottom: none;
    }

    .trend-info {
        flex-grow: 1;
    }

    .category {
        font-size: 12px;
        color: gray;
        margin: 0;
    }

    .trend-name {
        font-size: 14px;
        font-weight: bold;
        margin: 2px 0;
        color: black;
    }

    .tweet-count {
        font-size: 12px;
        color: gray;
        margin: 0;
    }

    .more-btn {
        background: none;
        border: none;
        font-size: 16px;
        cursor: pointer;
        color: gray;
    }
</style>

<div class="rightsidebar">
    <p id="rightSearch">Cari</p>

    <div class="referensi1">
        <p id="yml">Untuk diikuti</p>
        <div class="user">
            <img src="assets/user1.jpg" alt="Profile">
            <div class="user-info">
                <p class="name">Bintang</p>
                <p class="username">@bintangbaiq</p>
            </div>
            <button class="follow-btn">Ikuti</button>
        </div>
        <div class="user">
            <img src="assets/user2.jpg" alt="Profile">
            <div class="user-info">
                <p class="name">Ilham</p>
                <p class="username">@memetrewel</p>
            </div>
            <button class="follow-btn">Ikuti</button>
        </div>
        <a href="#" class="show-more">Tampilkan lebih banyak</a>
    </div>

    <div class="trending">
        <p id="tfy">Sedang hangat dibicarakan</p>

        <div class="trend">
            <div class="trend-info">
                <p class="category">Trending in Indonesia</p>
                <p class="trend-name">#TrendingTopic</p>
                <p class="tweet-count">50.2K Tweets</p>
            </div>
            <button class="more-btn">⋮</button>
        </div>

        <div class="trend">
            <div class="trend-info">
                <p class="category">Politics · Trending</p>
                <p class="trend-name">#Election2025</p>
                <p class="tweet-count">120K Tweets</p>
            </div>
            <button class="more-btn">⋮</button>
        </div>

        <div class="trend">
            <div class="trend-info">
                <p class="category">Entertainment · Trending</p>
                <p class="trend-name">#NewMovie</p>
                <p class="tweet-count">89.7K Tweets</p>
            </div>
            <button class="more-btn">⋮</button>
        </div>

        <a href="#" class="show-more">Tampilkan lebih banyak</a>
    </div>
</div>
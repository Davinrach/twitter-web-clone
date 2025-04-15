<style>
    .feed-tabs {
        display: flex;
        gap: 15px;
        padding: 12px 16px;
        border-bottom: 1px solid #ccc;
        width: calc(100% - 760px);
        margin: 0 auto;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        position: absolute;
        left: 0;
        right: 0;
    }

    .feed-tabs .tab {
        cursor: pointer;
        padding: 8px 20px;
        flex-grow: 0;
        text-align: center;
    }

    .feed-tabs .active {
        font-weight: bold;
        border-bottom: 4px solid deepskyblue;
    }
</style>

<div class="feed-tabs">
    <div class="tab active">Untuk anda</div>
    <div class="tab">Mengikuti</div>
    <div class="tab">Java</div>
</div>
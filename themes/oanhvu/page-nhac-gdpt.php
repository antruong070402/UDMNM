<?php
/**
 * Template Name: Danh sách nhạc GDPT
 * Template for displaying GDPT music list
 */

get_header(); ?>

<div class="nhac-gdpt-page">
    <div class="container">
        <div class="page-header">
            <h1 class="page-title">
                <i class="fas fa-music"></i> Danh sách nhạc GDPT
            </h1>
            <div class="title-underline"></div>
        </div>

        <div class="nhac-list">
            <!-- Sen Trắng -->
            <div class="nhac-item">
                <div class="nhac-content">
                    <h2 class="nhac-title">Sen Trắng</h2>
                    <p class="nhac-meta">
                        <span class="sang-tac">Sáng tác: Ưng Hội</span>
                        <span class="separator">-</span>
                        <span class="loi">Lời: Phạm Hữu Bình & Nguyễn Hữu Quân</span>
                    </p>
                </div>
                <div class="nhac-actions">
                    <button class="btn-detail">
                        <i class="fas fa-info-circle"></i> Chi tiết
                    </button>
                </div>
            </div>

            <!-- Phật Giáo Việt Nam -->
            <div class="nhac-item">
                <div class="nhac-content">
                    <h2 class="nhac-title">Phật Giáo Việt Nam</h2>
                    <p class="nhac-meta">
                        <span class="sang-tac">Sáng tác: Lê Cao Phan</span>
                    </p>
                </div>
                <div class="nhac-actions">
                    <button class="btn-detail">
                        <i class="fas fa-info-circle"></i> Chi tiết
                    </button>
                </div>
            </div>

            <!-- Trăm Hướng Đót -->
            <div class="nhac-item">
                <div class="nhac-content">
                    <h2 class="nhac-title">Trăm Hướng Đót</h2>
                    <p class="nhac-meta">
                        <span class="sang-tac">Sáng tác: Bửu Bắc</span>
                    </p>
                </div>
                <div class="nhac-actions">
                    <button class="btn-detail">
                        <i class="fas fa-info-circle"></i> Chi tiết
                    </button>
                </div>
            </div>

            <!-- Tình Lam - GDPT Thiền Hương -->
            <div class="nhac-item">
                <div class="nhac-content">
                    <h2 class="nhac-title">Tình Lam - GDPT Thiền Hương</h2>
                    <p class="nhac-meta">
                        <span class="tho">Thơ: Bích Nguyên</span>
                        <span class="separator">-</span>
                        <span class="nhac">Nhạc: Nguyễn Văn Thăng</span>
                    </p>
                </div>
                <div class="nhac-actions">
                    <button class="btn-detail">
                        <i class="fas fa-info-circle"></i> Chi tiết
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.nhac-gdpt-page {
    padding: 40px 0;
    background-color: #f8f9fa;
    min-height: 70vh;
}

.page-header {
    text-align: center;
    margin-bottom: 40px;
}

.page-title {
    font-size: 28px;
    color: #2c5aa0;
    font-weight: bold;
    margin-bottom: 10px;
}

.page-title i {
    margin-right: 10px;
    color: #4a90e2;
}

.title-underline {
    width: 80px;
    height: 3px;
    background-color: #2c5aa0;
    margin: 0 auto;
}

.nhac-list {
    max-width: 1000px;
    margin: 0 auto;
}

.nhac-item {
    background: white;
    border-radius: 8px;
    padding: 25px 30px;
    margin-bottom: 15px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
    transition: all 0.3s ease;
    border-left: 4px solid #e3f2fd;
}

.nhac-item:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    border-left-color: #2c5aa0;
}

.nhac-content {
    flex: 1;
}

.nhac-title {
    font-size: 22px;
    color: #333;
    margin-bottom: 8px;
    font-weight: 600;
}

.nhac-meta {
    color: #666;
    font-size: 14px;
    line-height: 1.4;
}

.sang-tac, .loi, .tho, .nhac {
    color: #555;
}

.separator {
    margin: 0 8px;
    color: #ccc;
}

.nhac-actions {
    margin-left: 20px;
}

.btn-detail {
    background: #4a90e2;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    font-size: 14px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-weight: 500;
}

.btn-detail:hover {
    background: #357abd;
    transform: translateY(-1px);
}

.btn-detail i {
    margin-right: 6px;
}

@media (max-width: 768px) {
    .nhac-item {
        flex-direction: column;
        align-items: flex-start;
        padding: 20px;
    }
    
    .nhac-actions {
        margin-left: 0;
        margin-top: 15px;
        width: 100%;
    }
    
    .btn-detail {
        width: 100%;
        justify-content: center;
        display: flex;
        align-items: center;
    }
    
    .page-title {
        font-size: 24px;
    }
    
    .nhac-title {
        font-size: 20px;
    }
}
</style>

<?php get_footer(); ?>

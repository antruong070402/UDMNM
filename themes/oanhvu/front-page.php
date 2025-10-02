<?php
/**
 * Template Name: Trang chủ Pressword
 * The front page template
 */

get_header(); ?>

<div class="pressword-homepage">
    <!-- Hero Section -->
    <section class="hero-section">
        <div class="hero-overlay"></div>
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1 class="hero-title">
                        <i class="fas fa-lotus"></i>
                        Chào Mừng Đến Với Pressword
                    </h1>
                    <p class="hero-subtitle">Gia Đình Phật Tử - Nơi Tu Học và Chia Sẻ Phật Pháp</p>
                    <p class="hero-description">
                        Khám phá những giá trị tâm linh, tu học theo lời Phật dạy, 
                        và cùng nhau xây dựng cộng đồng Phật tử tràn đầy yêu thương.
                    </p>
                    <div class="hero-buttons">
                        <a href="<?php echo esc_url(home_url('/Blog/')); ?>" class="btn btn-primary">
                            <i class="fas fa-book"></i> Phật Pháp
                        </a>
                        <a href="<?php echo esc_url(home_url('/nhac-gdpt/')); ?>" class="btn btn-secondary">
                            <i class="fas fa-music"></i> Nhạc GDPT
                        </a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Huy_hiệu_Hoa_Sen_1.jpg" alt="Huy hiệu Hoa Sen" />
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Các Hoạt Động Chính</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="features-grid">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-praying-hands"></i>
                    </div>
                    <h3 class="feature-title">Phật Pháp</h3>
                    <p class="feature-description">
                        Học hỏi và chia sẻ những lời dạy của Đức Phật, 
                        tu tập thiền định và phát triển trí tuệ.
                    </p>
                    <a href="<?php echo esc_url(home_url('/Blog/')); ?>" class="feature-link">
                        Tìm hiểu thêm <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-music"></i>
                    </div>
                    <h3 class="feature-title">Nhạc GDPT</h3>
                    <p class="feature-description">
                        Bộ sưu tập những bài nhạc thiêng liêng của Gia Đình Phật Tử, 
                        nuôi dưỡng tâm hồn và tình yêu Phật pháp.
                    </p>
                    <a href="<?php echo esc_url(home_url('/nhac-gdpt/')); ?>" class="feature-link">
                        Nghe nhạc <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3 class="feature-title">Tu Học Huấn Luyện</h3>
                    <p class="feature-description">
                        Chương trình đào tạo hệ thống cho các thành viên GDPT, 
                        từ Oanh Vũ đến Huynh Trưởng.
                    </p>
                    <a href="<?php echo esc_url(home_url('/trang-mau/')); ?>" class="feature-link">
                        Tham gia <i class="fas fa-arrow-right"></i>
                    </a>
                </div>

                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3 class="feature-title">Tin Tức</h3>
                    <p class="feature-description">
                        Cập nhật những tin tức mới nhất về hoạt động của GDPT 
                        và cộng đồng Phật giáo.
                    </p>
                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="feature-link">
                        Xem tin tức <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="quote-section">
        <div class="container">
            <div class="quote-content">
                <blockquote class="buddha-quote">
                    <i class="fas fa-quote-left"></i>
                    "Hãy là ngọn đèn cho chính mình. Hãy nương tựa vào chính mình, 
                    đừng nương tựa vào một ai khác. Hãy lấy Phật pháp làm ngọn đèn, 
                    lấy Phật pháp làm chỗ nương tựa."
                    <i class="fas fa-quote-right"></i>
                </blockquote>
                <cite class="quote-author">- Đức Phật Thích Ca -</cite>
            </div>
        </div>
    </section>

    <!-- Recent Posts Section -->
    <section class="recent-posts-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Bài Viết Mới Nhất</h2>
                <div class="title-underline"></div>
            </div>
            
            <div class="posts-grid">
                <?php
                $recent_posts = wp_get_recent_posts(array(
                    'numberposts' => 3,
                    'post_status' => 'publish'
                ));
                
                foreach($recent_posts as $post) : ?>
                    <div class="post-item">
                        <?php if(has_post_thumbnail($post['ID'])) : ?>
                            <div class="post-image">
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo get_the_post_thumbnail($post['ID'], 'medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <h3 class="post-title">
                                <a href="<?php echo get_permalink($post['ID']); ?>">
                                    <?php echo $post['post_title']; ?>
                                </a>
                            </h3>
                            <p class="post-excerpt">
                                <?php echo wp_trim_words($post['post_content'], 20); ?>
                            </p>
                            <div class="post-meta">
                                <span class="post-date">
                                    <i class="fas fa-calendar"></i>
                                    <?php echo get_the_date('d/m/Y', $post['ID']); ?>
                                </span>
                                <a href="<?php echo get_permalink($post['ID']); ?>" class="read-more">
                                    Đọc tiếp <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; wp_reset_query(); ?>
            </div>
            
            <div class="posts-footer">
                <a href="<?php echo esc_url(home_url('/Blog/')); ?>" class="btn btn-outline">
                    <i class="fas fa-book-open"></i> Xem Tất Cả Bài Viết
                </a>
            </div>
        </div>
    </section>
</div>

<style>
/* Hero Section */
.hero-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    position: relative;
    padding: 100px 0;
    overflow: hidden;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0,0,0,0.3);
}

.hero-content {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 60px;
    align-items: center;
    position: relative;
    z-index: 2;
}

.hero-title {
    font-size: 3.5rem;
    color: white;
    margin-bottom: 20px;
    font-weight: 700;
    line-height: 1.2;
}

.hero-title i {
    color: #ffd700;
    margin-right: 15px;
}

.hero-subtitle {
    font-size: 1.5rem;
    color: #e8f4f8;
    margin-bottom: 20px;
    font-weight: 300;
}

.hero-description {
    font-size: 1.1rem;
    color: #d0e7ff;
    margin-bottom: 40px;
    line-height: 1.6;
}

.hero-buttons {
    display: flex;
    gap: 20px;
}

.btn {
    padding: 15px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-primary {
    background: #ff6b6b;
    color: white;
    border: 2px solid #ff6b6b;
}

.btn-primary:hover {
    background: #ff5252;
    transform: translateY(-2px);
}

.btn-secondary {
    background: transparent;
    color: white;
    border: 2px solid white;
}

.btn-secondary:hover {
    background: white;
    color: #667eea;
    transform: translateY(-2px);
}

.hero-image img {
    width: 100%;
    height: 400px;
    object-fit: contain;
    border-radius: 15px;
    box-shadow: 0 20px 40px rgba(0,0,0,0.3);
}

/* Features Section */
.features-section {
    padding: 100px 0;
    background: #f8f9fa;
}

.section-header {
    text-align: center;
    margin-bottom: 80px;
}

.section-title {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 20px;
    font-weight: 700;
}

.title-underline {
    width: 80px;
    height: 4px;
    background: linear-gradient(45deg, #667eea, #764ba2);
    margin: 0 auto;
}

.features-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 40px;
}

.feature-item {
    background: white;
    padding: 40px 30px;
    border-radius: 15px;
    text-align: center;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.feature-item:hover {
    transform: translateY(-10px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.feature-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(45deg, #667eea, #764ba2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 25px;
}

.feature-icon i {
    font-size: 2rem;
    color: white;
}

.feature-title {
    font-size: 1.5rem;
    color: #333;
    margin-bottom: 15px;
    font-weight: 600;
}

.feature-description {
    color: #666;
    line-height: 1.6;
    margin-bottom: 25px;
}

.feature-link {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
}

.feature-link:hover {
    color: #764ba2;
}

/* Quote Section */
.quote-section {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    padding: 80px 0;
    text-align: center;
}

.buddha-quote {
    font-size: 1.5rem;
    color: white;
    font-style: italic;
    line-height: 1.8;
    margin-bottom: 20px;
    max-width: 800px;
    margin: 0 auto 20px;
}

.quote-author {
    color: #e8f4f8;
    font-size: 1.1rem;
    font-weight: 600;
}

/* Recent Posts Section */
.recent-posts-section {
    padding: 100px 0;
    background: white;
}

.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
    gap: 40px;
    margin-bottom: 60px;
}

.post-item {
    background: white;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.post-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(0,0,0,0.15);
}

.post-image img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.post-content {
    padding: 25px;
}

.post-title a {
    color: #333;
    text-decoration: none;
    font-size: 1.3rem;
    font-weight: 600;
    line-height: 1.4;
}

.post-title a:hover {
    color: #667eea;
}

.post-excerpt {
    color: #666;
    margin: 15px 0;
    line-height: 1.6;
}

.post-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    color: #999;
    font-size: 0.9rem;
}

.read-more {
    color: #667eea;
    text-decoration: none;
    font-weight: 600;
}

.read-more:hover {
    color: #764ba2;
}

.posts-footer {
    text-align: center;
}

.btn-outline {
    background: transparent;
    color: #667eea;
    border: 2px solid #667eea;
}

.btn-outline:hover {
    background: #667eea;
    color: white;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-content {
        grid-template-columns: 1fr;
        text-align: center;
    }
    
    .hero-title {
        font-size: 2.5rem;
    }
    
    .hero-buttons {
        justify-content: center;
        flex-wrap: wrap;
    }
    
    .features-grid,
    .posts-grid {
        grid-template-columns: 1fr;
    }
    
    .buddha-quote {
        font-size: 1.2rem;
    }
}
</style>

<?php get_footer(); ?>

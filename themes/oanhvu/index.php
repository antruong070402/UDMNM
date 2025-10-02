<?php
/**
 * The main template file
 */

get_header(); ?>

<main id="primary" class="site-main">
    <div class="container">
        <?php if (is_home() && !is_front_page()) : ?>
            <header class="page-header">
                <h1 class="page-title"><?php single_post_title(); ?></h1>
            </header>
        <?php endif; ?>

        <?php if (is_front_page()) : ?>

            <!-- Hero Banner Section -->
            <section class="hero-banner-section">
                <div class="hero-slider">
                    <div class="slide active">
                        <div class="slide-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/1.jpg');"></div>
                       
                    </div>
                    
                    <div class="slide">
                        <div class="slide-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/2.jpg');"></div>
                        
                    </div>
                    
                    <div class="slide">
                        <div class="slide-bg" style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/3.jpg');"></div>
                        
                    </div>
                </div>
                
                <!-- Slider Controls -->
                <div class="slider-controls">
                    <button class="slider-btn prev-btn">
                        <i class="icon-arrow-left"></i>
                    </button>
                    <button class="slider-btn next-btn">
                        <i class="icon-arrow-right"></i>
                    </button>
                </div>
                
                <!-- Slider Dots -->
                <div class="slider-dots">
                    <span class="dot active" data-slide="0"></span>
                    <span class="dot" data-slide="1"></span>
                    <span class="dot" data-slide="2"></span>
                </div>
            </section>

            <!-- Featured Works Section -->
            <section class="featured-works-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">TRUYỆN ĐẠO</h2>
                        <div class="section-separator">
                            <div class="separator-dot"></div>
                            <div class="separator-dot"></div>
                            <div class="separator-dot"></div>
                        </div>
                    </div>
                    
                    <div class="works-gallery">
                        <div class="work-item">
                            <a href="https://chatgpt.com/" target="_blank" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/b.jpeg" alt="tac pham 1" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>Con Voi Hiếu Nghĩa</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="work-item">
                            <a href=https://gdptvietnam.org/chuyen-tien-than-con-voi-hieu-nghia.gdpt"<?php echo esc_url(home_url('/tac-pham-2/')); ?>" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/d.jpeg" alt="Tác phẩm 2" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>Chim Oanh Vũ</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="work-item">
                            <a href=https://youtu.be/2XW9mKPJiC8?si=TAeBn_5TJaerKcJY"<?php echo esc_url(home_url('/tac-pham-3/')); ?>" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/e.jpeg" alt="Tác phẩm 3" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>Chiếc Cầu Muôn Thuở</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        
                        <div class="work-item">
                            <a href="<?php echo esc_url(home_url('/tac-pham-4/')); ?>" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/c.jpg" alt="Tác phẩm 4" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>Hoàng Tử Nhẫn Nhục</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="work-item">
                            <a href="<?php echo esc_url(home_url('/tac-pham-4/')); ?>" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/nâ.jpeg" alt="Tác phẩm 4" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>Con Nai Hiền</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="work-item">
                            <a href="<?php echo esc_url(home_url('/tac-pham-4/')); ?>" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/th.jpeg" alt="Tác phẩm 4" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>Con Thỏ Mến Đạo</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="work-item">
                            <a href="<?php echo esc_url(home_url('/tac-pham-4/')); ?>" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/vit.jpeg" alt="Tác phẩm 4" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>Thầy Tỳ Kheo Và Con Ngỗng</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="work-item">
                            <a href="<?php echo esc_url(home_url('/tac-pham-4/')); ?>" class="work-link">
                                <div class="work-image">
                                    <img src="<?php echo get_template_directory_uri(); ?>/images/ad.jpeg" alt="Tác phẩm 4" />
                                    <div class="work-overlay">
                                        <div class="work-info">
                                            <h3>Truyện Đạo</h3>
                                            <p>A Dục Vương</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    
                    <div class="section-footer">
                        <a href="<?php echo esc_url(home_url('/tac-pham/')); ?>" class="view-more-btn">Xem thêm</a>
                    </div>
                </div>
            </section>

            <!-- Artists Section -->
            <section class="artists-section">
                <div class="container">
                    <div class="section-header">
                        <h2 class="section-title">TU HỌC HUẤN LUYỆN </h2>
                        <div class="section-separator">
                            <div class="separator-dot"></div>
                            <div class="separator-dot"></div>
                            <div class="separator-dot"></div>
                        </div>
                        <p class="section-description"></p>
                    </div>
                    
                    <div class="artists-grid">
                        <div class="artist-card">
                            <div class="artist-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/G.png" alt="Minh Art" />
                            </div>
                            <div class="artist-info">
                                <h3 class="artist-name">MORSE</h3>
                                <p class="artist-specialty"></p>
                                <div class="artist-social">
                                    <a href="tel:+84123456789" class="social-btn">
                                        <i class="icon-phone"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="artist-card">
                            <div class="artist-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/SE.jpg" alt="Hung Tattoo" />
                            </div>
                            <div class="artist-info">
                                <h3 class="artist-name">SEMAPHORE</h3>
                                <p class="artist-specialty"></p>
                                <div class="artist-social">
                                    <a href="tel:+84123456789" class="social-btn">
                                        <i class="icon-phone"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="artist-card">
                            <div class="artist-image">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/sa.jpeg" alt="Alex Phuong Tattoo" />
                            </div>
                            <div class="artist-info">
                                <h3 class="artist-name">PHẬT PHÁP</h3>
                                <p class="artist-specialty"></p>
                                <div class="artist-social">
                                    <a href="tel:+84123456789" class="social-btn">
                                        <i class="icon-phone"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-btn">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <?php else : ?>
            <!-- Trang blog hoặc các trang khác -->
            <header class="page-header">
                <h1 class="page-title">Blog</h1>
            </header>

            <div class="posts-container">
                <?php if (have_posts()) : ?>
                    <div class="posts-grid">
                        <?php while (have_posts()) : the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class('post-item'); ?>>
                                <?php if (has_post_thumbnail()) : ?>
                                    <div class="post-thumbnail">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_post_thumbnail('medium'); ?>
                                        </a>
                                    </div>
                                <?php else : ?>
                                    <div class="post-thumbnail placeholder">
                                        <a href="<?php the_permalink(); ?>">
                                            <div class="placeholder-image"></div>
                                        </a>
                                    </div>
                                <?php endif; ?>
                                
                                <div class="post-content">
                                    <h2 class="post-title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    
                                    <div class="post-meta">
                                        <span class="post-date"><?php echo get_the_date(); ?></span>
                                        <span class="post-author">bởi <?php the_author(); ?></span>
                                    </div>
                                    
                                    <div class="post-excerpt">
                                        <?php the_excerpt(); ?>
                                    </div>
                                    
                                    <a href="<?php the_permalink(); ?>" class="read-more">Đọc thêm</a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <?php
                        echo paginate_links(array(
                            'prev_text' => '←',
                            'next_text' => '→',
                            'mid_size' => 2,
                        ));
                        ?>
                    </div>

                <?php else : ?>
                    <div class="no-posts">
                        <h2>Không tìm thấy bài viết nào</h2>
                        <p>Xin lỗi, không có bài viết nào được tìm thấy.</p>
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();

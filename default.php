<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduardo Destruti - Profile</title>
    <?php require_once 'parts/css.php'; ?>

<body>

    <!-- Banner verde do topo -->
    <div class="hero-banner"></div>

    <div class="main-container">

        <!-- Cartão principal do perfil -->
        <div class="profile-card">
            <div class="avatar-container">
                <img src="/img/destruti_avatar.webp" alt="Eduardo Destruti Avatar">
            </div>
            <h1>Eduardo Destruti</h1>
            <p>Married to Fernanda; father of Manuela, Maria Eduarda, and Zoey.</p>
            <div class="profile-meta">
                <span>📍 Tyler, TX - USA 🇺🇸</span>
                <span>Married to Fernanda; father of Manuela, Maria Eduarda, and Zoey.</span>
            </div>
        </div>

        <!-- Grade de Conteúdo (Sidebar + Post) -->
        <div class="content-grid">

            <!-- Coluna da Esquerda -->
            <div class="sidebar-column">
                <?php require_once 'parts/side_box_presentation.php'; ?>
                <?php require_once 'parts/side_box_menu.php'; ?>
            </div>

            <!-- Coluna da Direita (Card do Post) -->
            <div class="post-card">
                <div class="post-author-row">
                    <img src="https://media2.dev.to/dynamic/image/width=90,height=90,fit=cover,gravity=auto,format=auto/https%3A%2F%2Fdev-to-uploads.s3.us-east-2.amazonaws.com%2Fuploads%2Fuser%2Fprofile_image%2F4087198%2F4203d7cf-d029-46d1-9d7a-d9724e89dc45.png"
                        alt="Eduardo Destruti">
                    <div class="author-info">
                        <div class="author-name">Eduardo Destruti</div>
                        <div class="post-date">21 de ago.</div>
                    </div>
                </div>

                <a href="https://dev.to/destruti/seo-is-no-longer-enough-welcome-to-the-age-of-answer-engine-optimization-aeo-part-15-28ip"
                    target="_blank" class="post-title">
                    SEO is No Longer Enough: Welcome to the Age of Answer Engine Optimization (AEO) (Part 1/5)
                </a>

                <div class="post-footer">
                    <span>Shifting your focus from winning a click to earning an AI citation.</span>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
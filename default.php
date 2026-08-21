<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduardo Destruti - DEV Profile</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        }

        body {
            background-color: #f5f5f5;
            color: #171717;
        }

        /* Banner Verde do Topo */
        .hero-banner {
            background-color: #2b7036;
            height: 130px;
            width: 100%;
        }

        .main-container {
            max-width: 1000px;
            margin: 0 auto;
            padding: 0 16px 40px 16px;
            margin-top: -65px;
            /* Puxa o card para cima sobrepondo o banner */
        }

        /* Card de Perfil Superior */
        .profile-card {
            background: #ffffff;
            border: 1px solid #d4d4d4;
            border-radius: 6px;
            padding: 24px;
            text-align: center;
            position: relative;
            margin-bottom: 16px;
        }

        .avatar-container {
            width: 128px;
            height: 128px;
            margin: -85px auto 16px auto;
            border-radius: 50%;
            border: 4px solid #ffffff;
            overflow: hidden;
            background: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .avatar-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .edit-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            background-color: #3b49df;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 600;
            cursor: pointer;
            font-size: 0.9rem;
        }

        .profile-card h1 {
            font-size: 1.8rem;
            font-weight: 700;
            color: #090909;
            margin-bottom: 6px;
        }

        .profile-card p {
            color: #525252;
            font-size: 1rem;
            margin-bottom: 16px;
        }

        .profile-meta {
            display: flex;
            justify-content: center;
            gap: 24px;
            color: #717171;
            font-size: 0.9rem;
        }

        .profile-meta span {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        /* Layout em Grade para o Conteúdo Inferior */
        .content-grid {
            display: grid;
            grid-template-columns: 290px 1fr;
            gap: 16px;
        }

        @media (max-width: 768px) {
            .content-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Coluna da Esquerda */
        .sidebar-column {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .sidebar-box {
            background: #ffffff;
            border: 1px solid #d4d4d4;
            border-radius: 6px;
            padding: 16px;
        }

        .sidebar-box h3 {
            font-size: 1rem;
            color: #090909;
            margin-bottom: 12px;
        }

        .sidebar-box p {
            color: #525252;
            font-size: 0.95rem;
        }

        .stats-list {
            list-style: none;
            display: flex;
            flex-direction: column;
            gap: 12px;
            color: #404040;
            font-size: 0.9rem;
        }

        .stats-list li {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        /* Coluna da Direita (Post) */
        .post-card {
            background: #ffffff;
            border: 1px solid #d4d4d4;
            border-radius: 6px;
            padding: 24px;
        }

        .post-author-row {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 12px;
        }

        .post-author-row img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
        }

        .author-info .author-name {
            font-size: 0.9rem;
            font-weight: 600;
            color: #232323;
        }

        .author-info .post-date {
            font-size: 0.8rem;
            color: #717171;
        }

        .post-title {
            font-size: 1.4rem;
            font-weight: 700;
            color: #090909;
            text-decoration: none;
            display: block;
            margin-bottom: 12px;
            line-height: 1.3;
        }

        .post-title:hover {
            color: #3b49df;
        }

        .post-tags {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
            margin-bottom: 16px;
        }

        .tag {
            font-size: 0.85rem;
            color: #525252;
            text-decoration: none;
            background: transparent;
            padding: 2px 4px;
            border-radius: 4px;
        }

        .tag:hover {
            background: rgba(0, 0, 0, 0.05);
            color: #090909;
        }

        .post-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.85rem;
            color: #717171;
            border-top: 1px solid #f5f5f5;
            padding-top: 12px;
        }

        .comment-btn {
            background: none;
            border: none;
            color: #525252;
            cursor: pointer;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .comment-btn:hover {
            color: #090909;
            background: rgba(0, 0, 0, 0.05);
            padding: 4px 8px;
            border-radius: 4px;
        }
    </style>
</head>

<body>

    <!-- Banner verde do topo -->
    <div class="hero-banner"></div>

    <div class="main-container">

        <!-- Cartão principal do perfil -->
        <div class="profile-card">
            <button class="edit-btn">Edit profile</button>
            <div class="avatar-container">
                <img src="https://media2.dev.to/dynamic/image/width=320,height=320,fit=cover,gravity=auto,format=auto/https%3A%2F%2Fdev-to-uploads.s3.us-east-2.amazonaws.com%2Fuploads%2Fuser%2Fprofile_image%2F4087198%2F4203d7cf-d029-46d1-9d7a-d9724e89dc45.png"
                    alt="Eduardo Destruti">
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
                <div class="sidebar-box">
                    <h3>Currently learning</h3>
                    <p>CTO Stuff</p>
                </div>

                <div class="sidebar-box">
                    <ul class="stats-list">
                        <li>📄 1 post published</li>
                        <li>💬 0 comments written</li>
                        <li>🏷️ 5 tags followed</li>
                    </ul>
                </div>
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
                    <button class="comment-btn">💬 Add Comment</button>
                    <span>2 min read</span>
                </div>
            </div>

        </div>

    </div>

</body>

</html>
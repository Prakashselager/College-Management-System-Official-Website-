<aside class="admin-sidebar">
    <div class="sidebar-title">Main Navigation</div>
    <a href="dashboard.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'dashboard.php') ? 'active' : ''; ?>">
        <span class="icon">📊</span> Dashboard
    </a>
    <a href="manage-pages.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage-pages.php') ? 'active' : ''; ?>">
        <span class="icon">📄</span> Manage Pages
    </a>
    <a href="manage-navbar.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage-navbar.php') ? 'active' : ''; ?>">
        <span class="icon">📋</span> Navbar Menu
    </a>
    <a href="manage-slides.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage-slides.php') ? 'active' : ''; ?>">
        <span class="icon">🖼️</span> Slides & Banners
    </a>
    <a href="manage-news.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage-news.php') ? 'active' : ''; ?>">
        <span class="icon">📰</span> News & Updates
    </a>
    <div class="menu-divider"></div>
    <div class="sidebar-title">Management</div>
    <a href="manage-faculty.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage-faculty.php') ? 'active' : ''; ?>">
        <span class="icon">👨‍🏫</span> Faculty
    </a>
    <a href="admissions/manage-students.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage-students.php') ? 'active' : ''; ?>">
        <span class="icon">🎓</span> Students Admission
    </a>
    <a href="manage_admission.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage_admission.php') ? 'active' : ''; ?>">
        <span class="icon">📩</span> Enquiries
    </a>
    <div class="menu-divider"></div>
    <div class="sidebar-title">Settings</div>
    <a href="manage-admins.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'manage-admins.php') ? 'active' : ''; ?>">
        <span class="icon">👤</span> Admin Accounts
    </a>
    <a href="settings.php" class="menu-item <?php echo (basename($_SERVER['PHP_SELF']) == 'settings.php') ? 'active' : ''; ?>">
        <span class="icon">⚙️</span> Settings
    </a>
    <a href="logout.php" class="menu-item">
        <span class="icon">🚪</span> Logout
    </a>
</aside>
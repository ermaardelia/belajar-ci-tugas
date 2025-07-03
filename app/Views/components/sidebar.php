<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == '') ? "" : "collapsed" ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'keranjang') ? "" : "collapsed" ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->
         <?php
        if (session()->get('role') == 'admin') {
        ?>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'produk') ? "" : "collapsed" ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'diskon') ? "" : "collapsed" ?>" href="diskon">
                    <i class="bi bi-receipt"></i>
                    <span>Diskon</span>
                </a>
            <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'pembelian') ? "" : "collapsed" ?>" href="pembelian">
                    <i class="bi bi-receipt"></i>
                    <span>Pembelian</span>
                </a>
         <?php
        }
        ?>
        <li class="nav-item">
            <a class="nav-link <?php echo (uri_string() == 'profile') ? "" : "collapsed" ?>" href="profile">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Nav -->
            </li><!-- End Produk Nav -->
        <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'produk-kategori') ? "" : "collapsed" ?>" href="produk-kategori">
                    <i class="bi bi-receipt"></i>
                    <span>Kategori Produk</span>
                </a>
            </li><!-- End Produk FAQ -->
    <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'faq') ? "" : "collapsed" ?>" href="faq">
                    <i class="bi bi-question-circle"></i>
                    <span>F.A.Q</span>
                </a>
            </li><!-- End Produk Contact -->
    <li class="nav-item">
                <a class="nav-link <?php echo (uri_string() == 'contact') ? "" : "collapsed" ?>" href="contact">
                    <i class="bi bi-envelope"></i>
                    <span>Contact</span>
                </a>

</aside><!-- End Sidebar-->
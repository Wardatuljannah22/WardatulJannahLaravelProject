<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Product Menus</h2>
    </div>
    <div class="card-body">
        <nav class="nav flex-column">
            <a class="nav-link" href="{{ url('admin/products/'. $product .'/edit') }}">Product Detail</a>
            <a class="nav-link" href="{{ url('admin/products/'. $product .'/images') }}">Product Images</a>
        </nav>
    </div>
</div>
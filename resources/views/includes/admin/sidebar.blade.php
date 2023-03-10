<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-header">ADMIN PANEL</li>
        <li class="nav-item">
            <a href="{{ route('admin.product.index') }}" class="nav-link">
                <i class="nav-icon fas fa-regular fa-bars"></i>
                <p>
                    Products
                    <span class="badge badge-info right">{{ $products->total() }}</span>
                </p>
            </a>
            <a href="{{ route('admin.products.create') }}" class="nav-link">
                <i class="nav-icon fas fa-duotone fa-plus"></i>

                <p>
                    Add Product
                </p>
            </a>

        </li>
    </ul>
</nav>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm | Quản lý Kho</title>
<link rel="stylesheet" href="/INS3064/MVC_MINI_PROJECT_PRODUCTS/public/css/style.css">
</head>
<body>
    <div class="glow-overlay"></div>

    <div class="container">
        <header>
            <div class="header-content">
                <h1>Danh Sách Sản Phẩm</h1>
                <p class="subtitle">Quản lý kho hàng của bạn một cách thông minh</p>
            </div>
            
            <div class="header-actions">
                <a href="<?= BASE_URL ?>/product/create" class="btn btn-primary">
                    <svg width="20" height="20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                    </svg>
                    <span>Thêm sản phẩm</span>
                </a>
            </div>
        </header>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th width="10%">ID</th>
                        <th width="45%">Tên sản phẩm</th>
                        <th width="20%">Danh mục</th>
                        <th width="25%">Giá bán</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (!empty($data['products'])): ?>
                        <?php foreach ($data['products'] as $product): ?>
                        <tr>
                            <td>
                                <span class="id-tag">#<?= $product['id'] ?></span>
                            </td>
                            <td>
                                <div class="product-info">
                                    <span class="product-name"><?= htmlspecialchars($product['name']) ?></span>
                                </div>
                            </td>
                            <td>
                                <span class="badge"><?= htmlspecialchars($product['category']) ?></span>
                            </td>
                            <td>
                                <span class="price"><?= number_format($product['price'], 0, ',', '.') ?> <small>VNĐ</small></span>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="empty-state">
                                <div class="empty-content">
                                    <p>Chưa có sản phẩm nào trong kho hàng của bạn.</p>
                                    <small>Nhấn vào "Thêm sản phẩm" để bắt đầu.</small>
                                </div>
                            </td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
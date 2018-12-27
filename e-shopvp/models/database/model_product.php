<?php

class MProduct
{
    public $tb_account = 'account';
    public $tb_product = 'product';
    public $tb_product_type = 'product_type';
    public $tb_manufacturer = 'manufacturer';
    public $tb_orders = 'orders';
    public $tb_order_detail = 'order_detail';

    public $id;
    public $__name;

    public function get_last_entries($start = 0, $num = 12)
    {
        $query = "SELECT * FROM {$this->tb_product} ORDER BY date_added DESC LIMIT {$start},{$num}";

        return $query;
    }

    public function get_most_views($start = 0, $num = 12)
    {
        $query = "SELECT * FROM {$this->tb_product} ORDER BY views DESC LIMIT {$start},{$num}";

        return $query;
    }

    public function get_most_sold($start = 0, $num = 10)
    {
        $query = "SELECT * FROM {$this->tb_product} ORDER BY solds DESC LIMIT {$start},{$num}";

        return $query;
    }

    public function get_product()
    {
        $query = "SELECT * FROM {$this->tb_product} WHERE deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_product_type()
    {
        $query = "SELECT * FROM {$this->tb_product_type} WHERE deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_manufacturer()
    {
        $query = "SELECT * FROM {$this->tb_manufacturer} WHERE deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_orders()
    {
        $query = "SELECT * FROM {$this->tb_orders} WHERE deleted = 0 ORDER BY id ASC ";

        return $query;
    }

    public function get_order_detail()
    {
        $query = "SELECT * FROM {$this->tb_order_detail} WHERE deleted = 0 ORDER BY id ASC ";

        return $query;
    }


    // sử dụng cho thanh menu danh mục, loại sản phẩm có các nhà sản xuất tương ứng
    public function get_product_type_manufacturer($id_type = 1)
    {
        $query = "
        SELECT DISTINCT manufacturer.name, manufacturer.id, manufacturer.logo_url
        FROM manufacturer JOIN product ON manufacturer.id = product.manufacturer_id
		JOIN product_type ON product_type.id = product.product_type_id
        WHERE product_type.id = {$id_type}";

        return $query;
    }

    public function get_product_by_Condition($filter = array())
    {
        $where = "";

        if (!empty($filter['product_type'])) {
            $where .= " AND product_type_id = {$filter['product_type']}";
        }

        if (!empty($filter['manufacturer'])) {
            $where .= " AND manufacturer_id = {$filter['manufacturer']}";
        }

        $query = "
            SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0";
        //LIMIT {$start}, {$limit}";

        return $query;
    }

    public function product_pagination($filter = array(), $start = 0, $limit = 12)
    {
        //https://freetuts.net/thuat-toan-phan-trang-voi-php-va-mysql-550.html
        $where = "";

        if (!empty($filter['product_type'])) {
            $where .= " AND product_type_id = {$filter['product_type']}";
        }

        if (!empty($filter['manufacturer'])) {
            $where .= " AND manufacturer_id = {$filter['manufacturer']}";
        }

        $_start = 0;
        $_limit = 100;

        if (!empty($filter['page'])) {
            $_start = $start;
            $_limit = $limit;
        }

        $query = "
            SELECT * 
            FROM product 
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$_start}, {$_limit}";

        return $query;
    }


    public function get_one_product($filter = array())
    {
        $where = "";
        if (!empty($filter['id'])) {
            $where .= " AND product.id = {$filter['id']}";
        }
        $query = "
            SELECT 
            product.id as product_id,       
            product.name as product_name,
            product_type.id as type_id,       
            product_type.name as type_name,
            manufacturer.id as manufacturer_id,       
            manufacturer.name as manufacturer_name,
            product.price,
            product.origin,
            product.image_url,  
            product.inventory,     
            product.views,
            product.solds,
            product.descreibe
            FROM manufacturer JOIN product ON manufacturer.id = product.manufacturer_id
		    JOIN product_type ON product_type.id = product.product_type_id
            WHERE 1 {$where} AND product.deleted = 0";
        return $query;
    }

    public function get_one_product_type($id)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND product_type.id = {$id}";
        }
        $query = "SELECT * FROM {$this->tb_product_type} WHERE 1 {$where} deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_one_manufacturer($id)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND manufacturer.id = {$id}";
        }
        $query = "SELECT * FROM {$this->tb_manufacturer} WHERE 1 {$where} deleted = 0 ORDER BY name ASC ";

        return $query;
    }

    public function get_one_account($id)
    {
        $where = "";

        if (!empty($id)) {
            $where .= " AND product_type_id = {$id}";
        }
        $query = "SELECT * FROM {$this->tb_account} WHERE 1 AND deleted = 0 ORDER BY id ASC";

        return $query;
    }

    public function get_same_type($id, $start = 0, $limit = 6)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND product_type_id = {$id}";
        }

        $query = "SELECT * 
                  FROM product
                  WHERE 1 {$where} AND deleted = 0
                  LIMIT {$start}, {$limit}";
        return $query;
    }

    public function get_same_manufacturer($id, $start = 0, $limit = 6)
    {
        $where = "";
        if (!empty($id)) {
            $where .= " AND manufacturer_id = {$id}";
        }

        $query = "
        SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$start}, {$limit}";
        return $query;
    }

    public function get_all($filter = array(), $start = 0, $limit = 10)
    {
        $where = "";

        if (!empty($filter['product_type'])) {
            $where .= " AND product_type_id = {$filter['product_type']}";
        }

        if (!empty($filter['manufacturer'])) {
            $where .= " AND manufacturer_id = {$filter['manufacturer']}";
        }

        $query = "
            SELECT * 
            FROM product
            WHERE 1 {$where} AND deleted = 0
            LIMIT {$start}, {$limit}";

        // $sql = "SELECT * FROM `product` WHERE deleted = 0";

        return $query;
    }

    public function count_all($conn, $filter = array())
    {
        $where = "";

        if (!empty($filter['product_type'])) {
            $where .= " AND product_type_id = {$filter['product_type']}";
        }

        if (!empty($filter['manufacturer'])) {
            $where .= " AND manufacturer_id = {$filter['manufacturer']}";
        }

        $query = "
            SELECT *
            FROM product
            WHERE 1 {$where} AND deleted = 0";

        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        if ($row > 0) {
            return $row = mysqli_num_rows($result);
        }
        return 0;
    }

    public function view_session($conn, $id, $op)
    {
        //lưu lượt xem
        $module_data = 'product';
        $column_update = 'views';
        $id_update = $id;
        $session_view = $module_data . '_' . $op . '_' . $id_update;

        // Lấy giá trị session có tên là $module_data . '_' . $op . '_' . $_id
        $chech_view = $_SESSION[$session_view];

        // Kiểm tra, nếu $chech_view rỗng (Truy cập trang lần đầu) thì thực hiện code bên trong
        if (empty($chech_view)) {
            // Gán giá trị session
            $_SESSION[$session_view] = 1;
            // Thực hiện cập nhật lượt xem
            $query = "UPDATE {$module_data} SET {$column_update} = {$column_update} + 1 WHERE id = {$id_update}";
            mysqli_query($conn, $query);
        }
    }

    public function view_on_click($conn, $id)
    {
        //lưu lượt xem
        $module_data = 'product';
        $column_update = 'views';
        $id_update = $id;
        // Thực hiện cập nhật lượt xem
        $query = "UPDATE {$module_data} SET {$column_update} = {$column_update} + 1 WHERE id = {$id_update}";
        mysqli_query($conn, $query);
    }

    public function check_purchase_history($conn, $_id){
        $__id__ = (int)$_id;
        $query = "SELECT * FROM `orders` WHERE 1 AND account_id = {$__id__}";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        //nếu không tồn tại account trong mua hàng
        if ($row <= 0){
            return FALSE;
        } else{
            return TRUE;
        }
    }

    public function get_purchase_history($_id = -1)
    {
        $__id__ = (int)$_id;
        $query = "
        SELECT  
            account.id, account.display_name, 
            orders.date_create, orders.date_delivery, orders.deleted, orders.status,
            orders.recipient_name,  orders.recipient_tel, orders.total_pay, 
            orders.address_number, orders.street, orders.ward, orders.district, orders.province,  orders.ward, 
            order_detail.id, order_detail.quantity,
            product.name, product.image_url, product.price
        FROM account JOIN orders ON account.id = orders.account_id
        JOIN order_detail ON order_detail.order_id = orders.id
        JOIN product ON product.id = order_detail.product_id
        WHERE account.id = {$__id__}
        ORDER BY orders.date_delivery DESC;";

        return $query;
    }

    public function get_view_cart($_id = -1)
    {
        $__id__ = (int)$_id;
        $query = "
        SELECT  
            account.id, account.display_name, 
            orders.date_create, orders.date_delivery, orders.deleted, orders.status,
            orders.recipient_name,  orders.recipient_tel, orders.total_pay, 
            orders.address_number, orders.street, orders.ward, orders.district, orders.province,  orders.ward, 
            order_detail.id, order_detail.quantity, order_detail.deleted
            product.name, product.image_url, product.price
        FROM account JOIN orders ON account.id = orders.account_id
        JOIN order_detail ON order_detail.order_id = orders.id
        JOIN product ON product.id = order_detail.product_id
        WHERE account.id = {$__id__} AND order_detail.deleted = 1
        ORDER BY orders.date_delivery DESC;";

        return $query;
    }


    public function get_product_order_detail($_id)
    {
        $query = "
            SELECT *
            FROM product JOIN order_detail on product.id = order_detail.product_id
            WHERE order_detail.product_id = {$_id};";
        return $query;
    }

    public function check_add_cart($conn, $order_id, $product_id){
        $query ="
          SELECT *
          FROM order_detail
          WHERE order_detail.order_id = {$order_id} AND order_detail.product_id = {$product_id};";
        $result = mysqli_query($conn, $query);
        $row = mysqli_num_rows($result);
        //nếu không tồn tại product trong mua hàng
        if ($row <= 0){
            return FALSE;
        } else{
            return TRUE;
        }
    }

    public function add_cart($conn, $_id,  $price = 0, $order_id, $product_id){
        $__id__ = (int)$_id;
        $query = "
            INSERT INTO orders(account_id, date_create, date_delivery, total_pay, deleted, status)
            VALUES  ({$__id__}, now(), date_add(now(), interval '2:0' hour_minute), 0, 1, 0);";
        mysqli_query($conn, $query);

        $query2 = "
            INSERT INTO order_detail(quantity, price, order_id, product_id)
            VALUES (1, {$price}, {$order_id}, {$product_id});";

        mysqli_query($conn, $query2);
    }
}

?>


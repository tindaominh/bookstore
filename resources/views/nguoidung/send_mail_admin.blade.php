<h3>Đơn đặt hàng </h3>
<table class="table" width="100%">
    @foreach($nguoidung as $item)
    <tr>
        <td><b>Số hóa đơn</b></td>
        <td>{{ $item['id_don_hang'] }}</td>
        <td><b>Mã đơn hàng</b></td>
        <td>{{ $item['ma_don_hang'] }}</td>
        <td><b>Ngày hóa đơn</b></td>
        <td>{{ $item['created_at'] }}</td>
    </tr>
    <tr>
        <td><b>Khách hàng</b></td>
        <td>{{ $item['ho_ten'] }}</td>
        <td><b>Điện thoại</b></td>
        <td>{{ $item['dien_thoai'] }}</td>
        <td><b>Email</b></td>
        <td>{{ $item['email'] }}</td>
    </tr>
    <tr>
        <td><b>Địa chỉ</b></td>
        <td colspan="5">{{ $item['dia_chi'] }}</td>
    </tr>
    @break
    @endforeach
</table>
<table class="table" width="100%">
    <thead>
        <tr style="background-color: #02acea">
        <td>Stt</td>
        <td>Mã sách</td>
        <td>Tên sách</td>
        <td>Số lượng</td>
        <td>Đơn giá</td>
        <td>Thành tiền</td>
    </tr>
    </thead>
    <tbody>
        <?php $i=1; ?>
        @foreach($nguoidung as $item)
        <tr>
            <th scope="row"><?php echo $i; ?></th>
            <td>{{ $item['id_sach'] }}</td>
            <td>{{ $item['ten_sach'] }}</td>
            <td>{{ $item['so_luong'] }}</td>
            <td>{{ number_format($item['don_gia']) }} đ</td>
            <td>{{ number_format($item['thanh_tien']) }} đ</td>
        </tr>
        <?php $i++; ?>
        @endforeach
    </tbody>
    <tfoot>
        @foreach($nguoidung as $item)
        <tr style="background-color: #02acea">
            <td colspan="5">Tổng tiền</td>
            <td>{{ number_format($item['tong_tien']) }} đ</td>
        </tr>
        @break
        @endforeach
    </tfoot>
</table>
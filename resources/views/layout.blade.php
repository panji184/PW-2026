<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Ticket</title>

  <link rel="stylesheet" href="{{ asset('css/edit.css') }}">
</head>
<body>

  <div class="container">
    <div class="card">
      <h2>Edit Ticket</h2>

      <form>
        <div class="form-group">
          <label>Maskapai</label>
          <select>
            <option>Santos Air Premium</option>
            <option>Santos Air Regular</option>
          </select>
        </div>

        <div class="form-group">
          <label>Asal</label>
          <select>
            <option>Cimahi</option>
            <option>Bandung</option>
            <option>Bandung Barat</option>
            <option>Kabupaten Bandung</option>
            <option>Jakarta</option>
          </select>
        </div>

        <div class="form-group">
          <label>Tujuan</label>
          <select>
            <option>Cimahi</option>
            <option>Bandung</option>
            <option>Bandung Barat</option>
            <option>Kabupaten Bandung</option>
            <option>Jakarta</option>
          </select>
        </div>

        <div class="form-group">
          <label>Tanggal</label>
          <input type="date" />
        </div>

        <div class="form-group">
          <label>Harga</label>
          <select>
            <option>1.000.000</option>
            <option>2.000.000</option>
            <option>3.000.000</option>
          </select>
        </div>

        <button type="submit">Update Ticket</button>
      </form>
    </div>
  </div>

</body>
</html>
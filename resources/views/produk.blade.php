<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk</title>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Lato:wght@400;600;700&display=swap");

        body {
            margin: 0;
            font-family: 'Lato', sans-serif;
            background: #1E293B;
            color: #E2E8F0;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
        }

        .header {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header img {
            width: 181px;
            height: 42.33px;
            border-radius: 8px;
            object-fit: cover;
            margin-top: 1% ;
            margin-bottom:1%;
        }
        .nav {
            display: flex;
            gap: 20px;
        }

        .nav-item {
            padding: 10px 20px;
            border-radius: 8px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 16px;
            font-weight: 600;
            background: #334155;
            color: #E2E8F0;
            cursor: pointer;
        }


        .search-filter {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 10px;
            margin-bottom: 10px ;
            width: 100%;
        }

        .search-filter input {
            padding: 10px;
            border-radius: 8px;
            border: none;
            width: 300px;
            background: #334155;
            color: #E2E8F0;
            font-size: 14px;
        }

        .search-filter button {
            padding: 10px;
            border-radius: 8px;
            border: none;
            background: #47586E;
            color: white;
            font-size: 14px;
            cursor: pointer;
        }

        .table-container {
            width: 100%;
            overflow-x: auto;
            margin-top: 30px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: #273649;
            color: #E2E8F0;
        }

        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #334155;
        }

        th {
            background: #334155;
            font-weight: 400;
        }

        .pagination {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .pagination button {
            padding: 10px;
            border-radius: 8px;
            border: none;
            background: #334155;
            color: #E2E8F0;
            font-size: 14px;
            cursor: pointer;
        }

        .pagination button.active {
            background: #47586E;
            color: white;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background-color: #1E293B;
            padding: 20px;
            border-radius: 8px;
            width: 400px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .modal-content input, .modal-content button {
            padding: 10px;
            border-radius: 8px;
            border: none;
            background: #334155;
            color: #E2E8F0;
            font-size: 14px;
        }

        .modal-content button {
            cursor: pointer;
        }

        .close {
            align-self: flex-end;
            cursor: pointer;
        }
        
        </style>
</head>

<body>
    <div class="header">
        <img class="" src="logo.jpg" alt="Logo">
        <div class="nav">
            <div class="nav-item" id="add-product-button">Tambah Produk</div>
            <a href="{{ url('/berandadmin') }}"><div class="nav-item" >Beranda</div></a>
            </div>
    </div>

    <div class="search-filter">
        <input type="text" id="search-bar" placeholder="Pencarian">
        <button id="search-button">Cari</button>
    </div>

    <div class="table-container">
        <table id="product-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Persediaan</th>
                    <th>Masa Kadaluwarsa</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($produk as $index => $product)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $product->nama_obat }}</td>
                    <td>{{ $product->kategori_obat }}</td>
                    <td>{{ $product->stok }}</td>
                    <td>{{ $product->masa_kadaluarsa }}</td>
                    <td>
                        <button onclick="editProduct({{ $product->id }}, {{ $index }})">Edit</button>
                        <button onclick="deleteProduct({{ $product->id }})">Delete</button>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal" id="product-modal">
        <div class="modal-content">
            <span class="close" id="close-modal">&times;</span>
            <input type="text" id="product-name" placeholder="Nama Produk">
            <input type="text" id="product-category" placeholder="Kategori">
            <input type="number" id="product-stock" placeholder="Persediaan">
            <input type="date" id="product-expiry" placeholder="Masa Kadaluwarsa">
            <button id="save-product">Save</button>
        </div>
    </div>


    <script>
        let products = @json($produk);
        let editIndex = -1;
        let editId = -1;

        document.getElementById('add-product-button').addEventListener('click', () => {
            openModal()
        });

        document.getElementById('close-modal').addEventListener('click', () => {
            closeModal();
        });

        document.getElementById('save-product').addEventListener('click', () => {
            const name = document.getElementById('product-name').value;
            const category = document.getElementById('product-category').value;
            const stock = document.getElementById('product-stock').value;
            const expiry = document.getElementById('product-expiry').value;

            if (editIndex === -1) {
                fetch('/produk', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ nama_obat: name, kategori_obat: category, stok: stock, masa_kadaluarsa: expiry })
                }).then(response => response.json())
                .then(data => {
                    products.push(data);
                    renderTable();
                    resetForm();
                    document.getElementById('product-form').style.display = 'none';
                });
            } else {
                fetch(`/produk/${editId}`, {
                    method: 'PUT',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ nama_obat: name, kategori_obat: category, stok: stock, masa_kadaluarsa: expiry })
                }).then(response => response.json())
                .then(data => {
                    products[editIndex] = data;
                    closeModal();
                    renderTable();
                    resetForm();
                    editIndex = -1;
                    editId = -1;
                    document.getElementById('product-form').style.display = 'none';
                });
            }
        });

        function openModal() {
            document.getElementById('product-modal').style.display = 'flex';
        }

        function closeModal() {
            document.getElementById('product-modal').style.display = 'none';
        }

        document.getElementById('search-button').addEventListener('click', () => {
            const query = document.getElementById('search-bar').value;
            fetch(`/produk/search?query=${query}`, {
                method: 'GET',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => response.json())
            .then(data => {
                products = data;
                renderTable();
            });
        });

        function resetForm() {
            document.getElementById('product-name').value = '';
            document.getElementById('product-category').value = '';
            document.getElementById('product-stock').value = '';
            document.getElementById('product-expiry').value = '';
        }

        function renderTable() {
            const tbody = document.querySelector('#product-table tbody');
            tbody.innerHTML = '';

            products.forEach((product, index) => {
                const row = document.createElement('tr');

                row.innerHTML = `
                    <td>${index + 1}</td>
                    <td>${product.nama_obat}</td>
                    <td>${product.kategori_obat}</td>
                    <td>${product.stok}</td>
                    <td>${product.masa_kadaluarsa}</td>
                    <td>
                        <button onclick="editProduct(${product.id}, ${index})">Edit</button>
                        <button onclick="deleteProduct(${product.id})">Delete</button>
                    </td>
                `;

                tbody.appendChild(row);
            });
        }

        function editProduct(id, index) {
            editIndex = index;
            editId = id;
            const product = products[index];

            document.getElementById('product-name').value = product.nama_obat;
            document.getElementById('product-category').value = product.kategori_obat;
            document.getElementById('product-stock').value = product.stok;
            document.getElementById('product-expiry').value = product.masa_kadaluarsa;

            openModal();
        }

        function deleteProduct(id) {
            fetch(`/produk/${id}`, {
                method: 'DELETE',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => response.json())
            .then(data => {
                products = products.filter(product => product.id !== id);
                renderTable();
            });
        }

        renderTable();
    </script>
</body>

</html>

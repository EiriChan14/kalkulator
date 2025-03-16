<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>kalkulator</title>
</head>
<body>
    <!DOCTYPE html>

    
    <head>
        <title>Kalkulator</title>
        <style>
            .calculator {
                width: 90%;
                /* Menggunakan persentase untuk lebar */
                max-width: 450px;
                /* Maksimal lebar 450px */
                margin: 100px auto;
                padding: 20px;
                /* Mengurangi padding untuk responsif */
                border: 3px solid #ccc;
                border-radius: 5px;
                font-family: Arial, sans-serif;
                background-color: rgb(216, 219, 216);
            }
    
            .input-row {
                display: flex;
                flex-direction: column;
                /* Mengubah menjadi kolom untuk responsif */
                margin-bottom: 20px;
            }
    
            .input-group {
                width: 100%;
            }
    
            .input-group2 {
                width: 100%;
                padding: 10px;
                gap: 25px;
    
                display: inline-block;
            }
    
            label {
                display: block;
                margin-bottom: 2px;
                font-weight: bold;
            }
    
            input[type="number"],
            select {
                width: 100%;
                /* Menggunakan 100% untuk responsif */
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 3px;
            }
    
            button {
                width: 100%;
                padding: 10px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 2px;
                cursor: pointer;
                font-weight: bold;
                margin-top: 20px;
            }
    
            #hasil {
                margin-top: 20px;
                font-weight: bold;
                text-align: center;
                font-size: 18px;
                border: 2px solid #ddd;
                padding: 10px;
                border-radius: 20px;
                background-color: rgb(39, 173, 122);
            }
    
            h1 {
                text-align: center;
            }
    
            input::placeholder {
                font-style: italic;
                color: #999;
            }
    
            /* Media Queries untuk responsif */
            @media (min-width: 600px) {
                .input-row {
                    flex-direction: row;
                    /* Mengembalikan ke baris pada layar yang lebih besar */
                }
    
                .input-group {
                    margin-right: 10px;
                    /* Menambahkan margin antara input */
                }
    
                .input-group:last-child {
                    margin-right: 0;
                    /* Menghapus margin pada input terakhir */
                }
            }
        </style>
    </head>
    
    <body>

        <?php include "index.php"?>

        <div class="calculator">
            <h1>Kalkulator</h1>
            <form method="post" action="?php echo $_SERVER['PHP_SELF']; ?>">
                <div class="input-row">
                    <div class="input-group2">
                        <label for="angka1">Angka Pertama*</label>
                        <input type="number" name="angka1" placeholder="Silahkan masukkan angka pertama" required>
                    </div>
                    <div class="input-group2">
                        <label for="angka2">Angka Kedua*</label>
                        <input type="number" name="angka2" placeholder="Silahkan masukkan angka kedua" required>
                    </div>
                </div>
                <div class="input-group">
                    <label for="operator">Pilih Operator Aritmatika:</label>
                    <select name="operator" required>
                        <option value="">--pilih operator--</option>
                        <option value="+">+</option>
                        <option value="-">-</option>
                        <option value="*">x</option>
                        <option value="/">÷</option>
                    </select>
                </div>
                <button type="submit">CEK HASIL</button>
            </form>
        </div>
    </body>
    
    </html>
</body>
</html>
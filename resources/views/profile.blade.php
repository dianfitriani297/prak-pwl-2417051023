<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil DIAN FITRIANI</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f1f5f9;
        }

        .card {
            background-color: #ffffff;
            width: 330px;
            padding: 32px 24px;
            border-radius: 16px;
            box-shadow: 0 8px 24px rgba(15, 23, 42, 0.08);
            border: 1px solid #e2e8f0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .avatar-wrap {
            width: 110px;
            height: 110px;
            border-radius: 50%;
            padding: 4px;
            border: 2px solid #cbd5e1;
            margin-bottom: 24px;
        }

        .profile-img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            display: block;
        }

        .info-list {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .info-box {
            background-color: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 10px 14px;
            border-radius: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .info-label {
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #64748b;
            font-weight: 600;
        }

        .info-val {
            font-size: 14px;
            font-weight: 600;
            color: #0f172a;
        }
    </style>
</head>
<body>

    <div class="card">
        <div class="avatar-wrap">
            <img src="{{ asset('foto-profil.png') }}" alt="Foto Profil" class="profile-img">
        </div>

        <div class="info-list">
            <div class="info-box">
                <span class="info-label">Nama</span>
                <span class="info-val">{{ $nama }}</span>
            </div>
            <div class="info-box">
                <span class="info-label">Kelas</span>
                <span class="info-val">{{ $kelas }}</span>
            </div>
            <div class="info-box">
                <span class="info-label">NPM</span>
                <span class="info-val">{{ $npm }}</span>
            </div>
        </div>
    </div>

</body>
</html>
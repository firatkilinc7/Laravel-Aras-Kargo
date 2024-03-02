# Laravel Aras Cargo Integration

Laravel optimized version of Aras cargo query services.
<br><br>

<details>
<summary>English</summary>

## Setup:

- Create the class named ArasKargo.
- Set your Aras cargo integration url, username, password and integration code.
- Make sure you have SoapClient.

<br>


## Usage:

1. Set your config array according to the query type you want to use.
2. Create the object.
3. Set config.
4. Get response from the service you want.

### Example:

    $config = [
        "QueryType"       => "1",
        "IntegrationCode" => "123",
    ];

    $aras = new ArasKargo();
    $aras->ArasKargo();
    $aras->ConfigRequest = $config;
    $response = json_decode($aras->GetDataGetQueryJSON()->GetQueryJSONResult);
   

</details>



<details>
<summary>Türkçe</summary>

## Kurulum:

- ArasKargo yapısını projenize ekleyin.
- Aras kargo entegrasyon url, kullanıcı adı, şifre ve müşteri kodunuzu düzenleyin.
- SoapClient kullanılabilir olduğunu kontrol edin.

<br>


## Kullanım:

1. Ayarlama dizisini kullanmak istediğiniz sorgu türüne göre ayarlayın.
2. Nesneyi oluşturun.
3. Ayarlama dizisini gönderin.
4. Yanıt almak istediğiniz servisi çağırın.

### Örnek:

    $config = [
        "QueryType"       => "1",
        "IntegrationCode" => "123",
    ];

    $aras = new ArasKargo();
    $aras->ArasKargo();
    $aras->ConfigRequest = $config;
    $response = json_decode($aras->GetDataGetQueryJSON()->GetQueryJSONResult);
</details>

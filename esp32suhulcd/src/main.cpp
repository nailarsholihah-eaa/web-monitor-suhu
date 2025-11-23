#include <WiFi.h>
#include <HTTPClient.h>
#include <Wire.h>
#include <LiquidCrystal_I2C.h>
#include "DHT.h"

#define DHTPIN 4
#define DHTTYPE DHT22

const char* ssid = "Naell";
const char* password = "";

// Ganti IP sesuai laptop kamu (lihat di CMD → ipconfig)
const char* serverName = "http://10.193.78.30/websensor/dht_post.php";

LiquidCrystal_I2C lcd(0x27, 16, 2);
DHT dht(DHTPIN, DHTTYPE);

void setup() {
  Serial.begin(115200);
  WiFi.begin(ssid, password);

  lcd.init();
  lcd.backlight();
  lcd.setCursor(0, 0);
  lcd.print("Connecting WiFi");

  Serial.print("Menghubungkan ke WiFi...");
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("\nWiFi Terhubung!");
  lcd.clear();
  lcd.print("WiFi Connected!");
  delay(2000);
  lcd.clear();

  dht.begin();
}

void loop() {
  float suhu = dht.readTemperature();
  float kelembaban = dht.readHumidity();

  if (isnan(suhu) || isnan(kelembaban)) {
    Serial.println("Gagal baca sensor!");
    return;
  }

  // Tampilkan di LCD
  lcd.setCursor(0, 0);
  lcd.print("Suhu:");
  lcd.print(suhu);
  lcd.print("C ");
  lcd.setCursor(0, 1);
  lcd.print("Lembab:");
  lcd.print(kelembaban);
  lcd.print("% ");

  // Kirim data ke server
  if (WiFi.status() == WL_CONNECTED) {
    HTTPClient http;
    String url = String(serverName) + "?suhu=" + suhu + "&kelembaban=" + kelembaban;
    http.begin(url);
    int httpCode = http.GET();

    if (httpCode > 0) {
      Serial.println("Data terkirim ke server!");
    } else {
      Serial.println("Gagal kirim data!");
    }
    http.end();
  }

  delay(120000); // kirim setiap 5 detik
}

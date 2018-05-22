<?php

    return [
        'sp' => [
            'entityId' => $_SERVER[HTTP_HOST], // domain publik / nama aplikasi anda
            'assertionConsumerService' => [
                'url' => 'http://'.$_SERVER[HTTP_HOST].'/auth/proses', // url ke acs.php
            ],
            'singleLogoutService' => [
                'url' => 'http://'.$_SERVER[HTTP_HOST].'/auth/logout', // url
            ],
            'NameIDFormat' => 'urn:oasis:names:tc:SAML:2.0:nameid-format:unspecified',
        ],
        'idp' => [
            'entityId' => 'https://sso.uns.ac.id/saml2/idp/metadata.php',
            'singleSignOnService' => [
                'url' => 'https://sso.uns.ac.id/saml2/idp/SSOService.php',
            ],
            'singleLogoutService' => [
                'url' => 'https://sso.uns.ac.id/saml2/idp/SingleLogoutService.php',
            ],
            'x509cert' => 'MIIFSDCCBDCgAwIBAgIRAOmg/xuJyTlWdMbbVJL69NEwDQYJKoZIhvcNAQELBQAwgZAxCzAJBgNVBAYTAkdCMRswGQYDVQQIExJHcmVhdGVyIE1hbmNoZXN0ZXIxEDAOBgNVBAcTB1NhbGZvcmQxGjAYBgNVBAoTEUNPTU9ETyBDQSBMaW1pdGVkMTYwNAYDVQQDEy1DT01PRE8gUlNBIERvbWFpbiBWYWxpZGF0aW9uIFNlY3VyZSBTZXJ2ZXIgQ0EwHhcNMTUwOTAzMDAwMDAwWhcNMTcwOTAyMjM1OTU5WjBXMSEwHwYDVQQLExhEb21haW4gQ29udHJvbCBWYWxpZGF0ZWQxHDAaBgNVBAsTE0NPTU9ETyBTU0wgV2lsZGNhcmQxFDASBgNVBAMMCyoudW5zLmFjLmlkMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAynydR1LT33PRsOXj+BYzIUi+8w808zT1hrUjWDvAFXXu/oJUNUcSjyaXNj3K+W72FmNVrSNQzhEsirmalCRnebKqkW7HjPyRHSpV/jfMvNHIK4KxDlbC/Gi8wd9+UtYufcbDIZvAO6HettjHmCs2i72AtQ924QysYPfrLyicTwFcWhOHAyYA93/NblpgYtgScE+MngdHPwG182gYfw3F4gSKlfD7nwokK7zWWaApGsyh7Br6dYXic4ipU7R9S97/DBai/AAQKLYg+FZDbx7u0XphwxAxVLHB4RDSbfGceNRIrex2BnQW3SFDorOHetVH4Oy4gm+BykWJankk6VyLZQIDAQABo4IB0zCCAc8wHwYDVR0jBBgwFoAUkK9qOpRaC9iQ6hJWc99DtDoo2ucwHQYDVR0OBBYEFHYOb+DJJFyOpjR0sd6G9WL47m9FMA4GA1UdDwEB/wQEAwIFoDAMBgNVHRMBAf8EAjAAMB0GA1UdJQQWMBQGCCsGAQUFBwMBBggrBgEFBQcDAjBPBgNVHSAESDBGMDoGCysGAQQBsjEBAgIHMCswKQYIKwYBBQUHAgEWHWh0dHBzOi8vc2VjdXJlLmNvbW9kby5jb20vQ1BTMAgGBmeBDAECATBUBgNVHR8ETTBLMEmgR6BFhkNodHRwOi8vY3JsLmNvbW9kb2NhLmNvbS9DT01PRE9SU0FEb21haW5WYWxpZGF0aW9uU2VjdXJlU2VydmVyQ0EuY3JsMIGFBggrBgEFBQcBAQR5MHcwTwYIKwYBBQUHMAKGQ2h0dHA6Ly9jcnQuY29tb2RvY2EuY29tL0NPTU9ET1JTQURvbWFpblZhbGlkYXRpb25TZWN1cmVTZXJ2ZXJDQS5jcnQwJAYIKwYBBQUHMAGGGGh0dHA6Ly9vY3NwLmNvbW9kb2NhLmNvbTAhBgNVHREEGjAYggsqLnVucy5hYy5pZIIJdW5zLmFjLmlkMA0GCSqGSIb3DQEBCwUAA4IBAQBuyEh0ZpADN7lYVCOSd9NiBZWX9OCfQYwjHC0UZVIAg8qoOMVC/2gumhx8E5qbrAjPgALhn3kGP7D53zU6Xvi0uM32KUVa+Qqgwkm1VTOQWZwxm0CR14sPXBvc3m7Fgz9u3I5G5KFkhNuZkTEV7GK+kCYHV6y2QHS4Qoh8+lVXlznvxmm/tEFmZsqQj/bQBGAi/07jfBbFkAxbqan2aINzTQLU9z/1T09bBHrUsa8JJbUYDUT3nOQ50DYmUDbHJGKyyAAFInoYbGhRWOoa+rzQWnA/ud3qO85pzAVv23umhOGQM8CuxCJpogrx7QZT3wmTB6gMJFKeMoSVncEf1efl',
        ],
    ];
?>

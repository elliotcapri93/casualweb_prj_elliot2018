<?php
// require __DIR__ . '\vendor\autoload.php';

// use Crypt\RSA;
// require Crypt\RSA;
// include 'Crypt/RSA.php';

require __DIR__ . '\vendor\autoload.php';

use phpseclib\Crypt\RSA;

$rsa = new RSA();

$rsa->setPrivateKeyFormat(RSA::PRIVATE_FORMAT_XML);
$rsa->setPublicKeyFormat(RSA::PUBLIC_FORMAT_XML);
extract($rsa->createKey());

// $plaintext = 'terrafrost';
// $rsa->loadKey($privatekey);
// $ciphertext = $rsa->encrypt($plaintext);


$ciphertext = ':&i?#肖縹?5C8迢I!?-蜵?魕N毰疻y    軧鬓衰資xC*Z?圽睱OM?z9vG蜁俜臣キ湅??&&錐钩蜬[j覿曯@S8?!1"蝲菻礱?k@V鈈?瓳';

$rsa->loadKey('<RSAKeyValue><Modulus>qvJXzGcnAGjEBSeJXfPYDDiCQkU/Gr0FLH1cPvnl1q3eDNb8rFfjiD2IXGVpRDQAX2f1laCzPKCX+XUPdSOKcdJcJqqfkU6UNurO86HViPGvE0qr67LAfiYIZP4p8o+czj+aqVYJ4TwBMudzvaA1cj0aUS0/g2iZf89hPdIo3hU=</Modulus><Exponent>AQAB</Exponent></RSAKeyValue>');
echo $rsa->decrypt($ciphertext);



// $rsa->loadKey('<RSAKeyValue><Modulus>3c4CVJ1Zgrm8pcJYqUiO3f+jxayem6M3QjlY2USDAeSbxZhZb9YlDQafshI2hI5mTmmqfhRH38FCyQ1jm4i3Ax4T68ORyqnniub2f3KMbhiDnCRdZADUzTFxZaG5jxZ6gAa/LIA9R3d7xHI26EWXJdA5iztThE27l7VyUkP/YNU=</Modulus><Exponent>AQAB</Exponent></RSAKeyValue>'); // public key

// $plaintext = 'Test1';

// $rsa->setEncryptionMode(RSA::ENCRYPTION_OAEP);
// $ciphertext = $rsa->encrypt($plaintext);

// $rsa->loadKey('<RSAKeyValue><Modulus>3c4CVJ1Zgrm8pcJYqUiO3f+jxayem6M3QjlY2USDAeSbxZhZb9YlDQafshI2hI5mTmmqfhRH38FCyQ1jm4i3Ax4T68ORyqnniub2f3KMbhiDnCRdZADUzTFxZaG5jxZ6gAa/LIA9R3d7xHI26EWXJdA5iztThE27l7VyUkP/YNU=</Modulus><Exponent>AQAB</Exponent><P>/w9bWle85EB09kzSYXPHOnqTuQsZVniQnpDXzQKEGKZAP3evSGECkh/HbpkA/ytfbKSTQ5T/IAT7sc+sytthsw==</P><Q>3p9G1R2BPHH538QldMzBHOD/cb5ESI4shtOZIGCCgOQXP3e+elmy7fQffAo7wL4z6KUOCQkLMxfyr8ks57GfVw==</Q><DP>Hlw8modhE6ZchcjlLfZzG5HlrZwVmwZk6IsDNQL8qFZ5xVRAyBPME4q22YJa7QTDqhH4+Y1txOjy8NpwjgEJIw==</DP><DQ>3N2w7KcFHO8HNRXpA2RRA1HGnRZjsIg9bNZpyVF2qGGjHviyJbjwaFwXEH0moycRYPLAZf5u+hX8VKKGxqfWqQ==</DQ><InverseQ>pKQ+KPnX5577GtsOayoC0RIsBLVe12W4QAIJHQDkiNJ52of/CJh7Cqf4dwlOnhWUvqe5H8H1/j0DzwWw8iKAXw==</InverseQ><D>d6xPVZgQU5gjUMwrSir76oujsWQRr6fAiNqoNZHhnYPbCCHLH6xLEVwhjdKF1799M5GPi7clkHSVtCSlOaXqF6LHA4wGW00sepgjP6f0y2IMV8tRMqBSrhXSZ7Vlev7uFPAyBpf5ewgh4kTkSAc4P3BVQcKp58ZxFKtJCuRu8YE=</D></RSAKeyValue>'); // private key
// echo $rsa->decrypt($ciphertext);
?>
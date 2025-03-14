<?php

return array (
  'type' => 'extension',
  'name' => 'sodium',
  'meta' => 
  array (
    'type' => 'extension',
    'name' => 'sodium',
    'description' => '',
    'keywords' => 
    array (
    ),
    'added' => '0.0',
    'deprecated' => 
    ReflectionExtension::__set_state(array(
       'name' => 'sodium',
    )),
    'removed' => NULL,
    'version' => '8.1.32',
    'resources' => 
    array (
      0 => 
      array (
        'name' => 'sodium extension (php.net)',
        'url' => 'https://www.php.net/manual/book.sodium.php',
      ),
    ),
  ),
  'classes' => 
  array (
    0 => 'SodiumException',
  ),
  'functions' => 
  array (
    'sodium_crypto_aead_aes256gcm_is_available' => 'sodium_crypto_aead_aes256gcm_is_available',
    'sodium_crypto_aead_aes256gcm_decrypt' => 'sodium_crypto_aead_aes256gcm_decrypt',
    'sodium_crypto_aead_aes256gcm_encrypt' => 'sodium_crypto_aead_aes256gcm_encrypt',
    'sodium_crypto_aead_aes256gcm_keygen' => 'sodium_crypto_aead_aes256gcm_keygen',
    'sodium_crypto_aead_chacha20poly1305_decrypt' => 'sodium_crypto_aead_chacha20poly1305_decrypt',
    'sodium_crypto_aead_chacha20poly1305_encrypt' => 'sodium_crypto_aead_chacha20poly1305_encrypt',
    'sodium_crypto_aead_chacha20poly1305_keygen' => 'sodium_crypto_aead_chacha20poly1305_keygen',
    'sodium_crypto_aead_chacha20poly1305_ietf_decrypt' => 'sodium_crypto_aead_chacha20poly1305_ietf_decrypt',
    'sodium_crypto_aead_chacha20poly1305_ietf_encrypt' => 'sodium_crypto_aead_chacha20poly1305_ietf_encrypt',
    'sodium_crypto_aead_chacha20poly1305_ietf_keygen' => 'sodium_crypto_aead_chacha20poly1305_ietf_keygen',
    'sodium_crypto_aead_xchacha20poly1305_ietf_decrypt' => 'sodium_crypto_aead_xchacha20poly1305_ietf_decrypt',
    'sodium_crypto_aead_xchacha20poly1305_ietf_keygen' => 'sodium_crypto_aead_xchacha20poly1305_ietf_keygen',
    'sodium_crypto_aead_xchacha20poly1305_ietf_encrypt' => 'sodium_crypto_aead_xchacha20poly1305_ietf_encrypt',
    'sodium_crypto_auth' => 'sodium_crypto_auth',
    'sodium_crypto_auth_keygen' => 'sodium_crypto_auth_keygen',
    'sodium_crypto_auth_verify' => 'sodium_crypto_auth_verify',
    'sodium_crypto_box' => 'sodium_crypto_box',
    'sodium_crypto_box_keypair' => 'sodium_crypto_box_keypair',
    'sodium_crypto_box_seed_keypair' => 'sodium_crypto_box_seed_keypair',
    'sodium_crypto_box_keypair_from_secretkey_and_publickey' => 'sodium_crypto_box_keypair_from_secretkey_and_publickey',
    'sodium_crypto_box_open' => 'sodium_crypto_box_open',
    'sodium_crypto_box_publickey' => 'sodium_crypto_box_publickey',
    'sodium_crypto_box_publickey_from_secretkey' => 'sodium_crypto_box_publickey_from_secretkey',
    'sodium_crypto_box_seal' => 'sodium_crypto_box_seal',
    'sodium_crypto_box_seal_open' => 'sodium_crypto_box_seal_open',
    'sodium_crypto_box_secretkey' => 'sodium_crypto_box_secretkey',
    'sodium_crypto_core_ristretto255_add' => 'sodium_crypto_core_ristretto255_add',
    'sodium_crypto_core_ristretto255_from_hash' => 'sodium_crypto_core_ristretto255_from_hash',
    'sodium_crypto_core_ristretto255_is_valid_point' => 'sodium_crypto_core_ristretto255_is_valid_point',
    'sodium_crypto_core_ristretto255_random' => 'sodium_crypto_core_ristretto255_random',
    'sodium_crypto_core_ristretto255_scalar_add' => 'sodium_crypto_core_ristretto255_scalar_add',
    'sodium_crypto_core_ristretto255_scalar_complement' => 'sodium_crypto_core_ristretto255_scalar_complement',
    'sodium_crypto_core_ristretto255_scalar_invert' => 'sodium_crypto_core_ristretto255_scalar_invert',
    'sodium_crypto_core_ristretto255_scalar_mul' => 'sodium_crypto_core_ristretto255_scalar_mul',
    'sodium_crypto_core_ristretto255_scalar_negate' => 'sodium_crypto_core_ristretto255_scalar_negate',
    'sodium_crypto_core_ristretto255_scalar_random' => 'sodium_crypto_core_ristretto255_scalar_random',
    'sodium_crypto_core_ristretto255_scalar_reduce' => 'sodium_crypto_core_ristretto255_scalar_reduce',
    'sodium_crypto_core_ristretto255_scalar_sub' => 'sodium_crypto_core_ristretto255_scalar_sub',
    'sodium_crypto_core_ristretto255_sub' => 'sodium_crypto_core_ristretto255_sub',
    'sodium_crypto_kx_keypair' => 'sodium_crypto_kx_keypair',
    'sodium_crypto_kx_publickey' => 'sodium_crypto_kx_publickey',
    'sodium_crypto_kx_secretkey' => 'sodium_crypto_kx_secretkey',
    'sodium_crypto_kx_seed_keypair' => 'sodium_crypto_kx_seed_keypair',
    'sodium_crypto_kx_client_session_keys' => 'sodium_crypto_kx_client_session_keys',
    'sodium_crypto_kx_server_session_keys' => 'sodium_crypto_kx_server_session_keys',
    'sodium_crypto_generichash' => 'sodium_crypto_generichash',
    'sodium_crypto_generichash_keygen' => 'sodium_crypto_generichash_keygen',
    'sodium_crypto_generichash_init' => 'sodium_crypto_generichash_init',
    'sodium_crypto_generichash_update' => 'sodium_crypto_generichash_update',
    'sodium_crypto_generichash_final' => 'sodium_crypto_generichash_final',
    'sodium_crypto_kdf_derive_from_key' => 'sodium_crypto_kdf_derive_from_key',
    'sodium_crypto_kdf_keygen' => 'sodium_crypto_kdf_keygen',
    'sodium_crypto_pwhash' => 'sodium_crypto_pwhash',
    'sodium_crypto_pwhash_str' => 'sodium_crypto_pwhash_str',
    'sodium_crypto_pwhash_str_verify' => 'sodium_crypto_pwhash_str_verify',
    'sodium_crypto_pwhash_str_needs_rehash' => 'sodium_crypto_pwhash_str_needs_rehash',
    'sodium_crypto_pwhash_scryptsalsa208sha256' => 'sodium_crypto_pwhash_scryptsalsa208sha256',
    'sodium_crypto_pwhash_scryptsalsa208sha256_str' => 'sodium_crypto_pwhash_scryptsalsa208sha256_str',
    'sodium_crypto_pwhash_scryptsalsa208sha256_str_verify' => 'sodium_crypto_pwhash_scryptsalsa208sha256_str_verify',
    'sodium_crypto_scalarmult' => 'sodium_crypto_scalarmult',
    'sodium_crypto_scalarmult_ristretto255' => 'sodium_crypto_scalarmult_ristretto255',
    'sodium_crypto_scalarmult_ristretto255_base' => 'sodium_crypto_scalarmult_ristretto255_base',
    'sodium_crypto_secretbox' => 'sodium_crypto_secretbox',
    'sodium_crypto_secretbox_keygen' => 'sodium_crypto_secretbox_keygen',
    'sodium_crypto_secretbox_open' => 'sodium_crypto_secretbox_open',
    'sodium_crypto_secretstream_xchacha20poly1305_keygen' => 'sodium_crypto_secretstream_xchacha20poly1305_keygen',
    'sodium_crypto_secretstream_xchacha20poly1305_init_push' => 'sodium_crypto_secretstream_xchacha20poly1305_init_push',
    'sodium_crypto_secretstream_xchacha20poly1305_push' => 'sodium_crypto_secretstream_xchacha20poly1305_push',
    'sodium_crypto_secretstream_xchacha20poly1305_init_pull' => 'sodium_crypto_secretstream_xchacha20poly1305_init_pull',
    'sodium_crypto_secretstream_xchacha20poly1305_pull' => 'sodium_crypto_secretstream_xchacha20poly1305_pull',
    'sodium_crypto_secretstream_xchacha20poly1305_rekey' => 'sodium_crypto_secretstream_xchacha20poly1305_rekey',
    'sodium_crypto_shorthash' => 'sodium_crypto_shorthash',
    'sodium_crypto_shorthash_keygen' => 'sodium_crypto_shorthash_keygen',
    'sodium_crypto_sign' => 'sodium_crypto_sign',
    'sodium_crypto_sign_detached' => 'sodium_crypto_sign_detached',
    'sodium_crypto_sign_ed25519_pk_to_curve25519' => 'sodium_crypto_sign_ed25519_pk_to_curve25519',
    'sodium_crypto_sign_ed25519_sk_to_curve25519' => 'sodium_crypto_sign_ed25519_sk_to_curve25519',
    'sodium_crypto_sign_keypair' => 'sodium_crypto_sign_keypair',
    'sodium_crypto_sign_keypair_from_secretkey_and_publickey' => 'sodium_crypto_sign_keypair_from_secretkey_and_publickey',
    'sodium_crypto_sign_open' => 'sodium_crypto_sign_open',
    'sodium_crypto_sign_publickey' => 'sodium_crypto_sign_publickey',
    'sodium_crypto_sign_secretkey' => 'sodium_crypto_sign_secretkey',
    'sodium_crypto_sign_publickey_from_secretkey' => 'sodium_crypto_sign_publickey_from_secretkey',
    'sodium_crypto_sign_seed_keypair' => 'sodium_crypto_sign_seed_keypair',
    'sodium_crypto_sign_verify_detached' => 'sodium_crypto_sign_verify_detached',
    'sodium_crypto_stream' => 'sodium_crypto_stream',
    'sodium_crypto_stream_keygen' => 'sodium_crypto_stream_keygen',
    'sodium_crypto_stream_xor' => 'sodium_crypto_stream_xor',
    'sodium_crypto_stream_xchacha20' => 'sodium_crypto_stream_xchacha20',
    'sodium_crypto_stream_xchacha20_keygen' => 'sodium_crypto_stream_xchacha20_keygen',
    'sodium_crypto_stream_xchacha20_xor' => 'sodium_crypto_stream_xchacha20_xor',
    'sodium_add' => 'sodium_add',
    'sodium_compare' => 'sodium_compare',
    'sodium_increment' => 'sodium_increment',
    'sodium_memcmp' => 'sodium_memcmp',
    'sodium_memzero' => 'sodium_memzero',
    'sodium_pad' => 'sodium_pad',
    'sodium_unpad' => 'sodium_unpad',
    'sodium_bin2hex' => 'sodium_bin2hex',
    'sodium_hex2bin' => 'sodium_hex2bin',
    'sodium_bin2base64' => 'sodium_bin2base64',
    'sodium_base642bin' => 'sodium_base642bin',
    'sodium_crypto_scalarmult_base' => 'sodium_crypto_scalarmult_base',
  ),
  'constants' => 
  array (
    'SODIUM_LIBRARY_VERSION' => '1.0.18',
    'SODIUM_LIBRARY_MAJOR_VERSION' => 10,
    'SODIUM_LIBRARY_MINOR_VERSION' => 3,
    'SODIUM_CRYPTO_AEAD_AES256GCM_KEYBYTES' => 32,
    'SODIUM_CRYPTO_AEAD_AES256GCM_NSECBYTES' => 0,
    'SODIUM_CRYPTO_AEAD_AES256GCM_NPUBBYTES' => 12,
    'SODIUM_CRYPTO_AEAD_AES256GCM_ABYTES' => 16,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_KEYBYTES' => 32,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NSECBYTES' => 0,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_NPUBBYTES' => 8,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_ABYTES' => 16,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_KEYBYTES' => 32,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NSECBYTES' => 0,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_NPUBBYTES' => 12,
    'SODIUM_CRYPTO_AEAD_CHACHA20POLY1305_IETF_ABYTES' => 16,
    'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_KEYBYTES' => 32,
    'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NSECBYTES' => 0,
    'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_NPUBBYTES' => 24,
    'SODIUM_CRYPTO_AEAD_XCHACHA20POLY1305_IETF_ABYTES' => 16,
    'SODIUM_CRYPTO_AUTH_BYTES' => 32,
    'SODIUM_CRYPTO_AUTH_KEYBYTES' => 32,
    'SODIUM_CRYPTO_BOX_SEALBYTES' => 48,
    'SODIUM_CRYPTO_BOX_SECRETKEYBYTES' => 32,
    'SODIUM_CRYPTO_BOX_PUBLICKEYBYTES' => 32,
    'SODIUM_CRYPTO_BOX_KEYPAIRBYTES' => 64,
    'SODIUM_CRYPTO_BOX_MACBYTES' => 16,
    'SODIUM_CRYPTO_BOX_NONCEBYTES' => 24,
    'SODIUM_CRYPTO_BOX_SEEDBYTES' => 32,
    'SODIUM_CRYPTO_KDF_BYTES_MIN' => 16,
    'SODIUM_CRYPTO_KDF_BYTES_MAX' => 64,
    'SODIUM_CRYPTO_KDF_CONTEXTBYTES' => 8,
    'SODIUM_CRYPTO_KDF_KEYBYTES' => 32,
    'SODIUM_CRYPTO_KX_SEEDBYTES' => 32,
    'SODIUM_CRYPTO_KX_SESSIONKEYBYTES' => 32,
    'SODIUM_CRYPTO_KX_PUBLICKEYBYTES' => 32,
    'SODIUM_CRYPTO_KX_SECRETKEYBYTES' => 32,
    'SODIUM_CRYPTO_KX_KEYPAIRBYTES' => 64,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_ABYTES' => 17,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_HEADERBYTES' => 24,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_KEYBYTES' => 32,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_MESSAGEBYTES_MAX' => 274877906816,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_MESSAGE' => 0,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_PUSH' => 1,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_REKEY' => 2,
    'SODIUM_CRYPTO_SECRETSTREAM_XCHACHA20POLY1305_TAG_FINAL' => 3,
    'SODIUM_CRYPTO_GENERICHASH_BYTES' => 32,
    'SODIUM_CRYPTO_GENERICHASH_BYTES_MIN' => 16,
    'SODIUM_CRYPTO_GENERICHASH_BYTES_MAX' => 64,
    'SODIUM_CRYPTO_GENERICHASH_KEYBYTES' => 32,
    'SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MIN' => 16,
    'SODIUM_CRYPTO_GENERICHASH_KEYBYTES_MAX' => 64,
    'SODIUM_CRYPTO_PWHASH_ALG_ARGON2I13' => 1,
    'SODIUM_CRYPTO_PWHASH_ALG_ARGON2ID13' => 2,
    'SODIUM_CRYPTO_PWHASH_ALG_DEFAULT' => 2,
    'SODIUM_CRYPTO_PWHASH_SALTBYTES' => 16,
    'SODIUM_CRYPTO_PWHASH_STRPREFIX' => '$argon2id$',
    'SODIUM_CRYPTO_PWHASH_OPSLIMIT_INTERACTIVE' => 2,
    'SODIUM_CRYPTO_PWHASH_MEMLIMIT_INTERACTIVE' => 67108864,
    'SODIUM_CRYPTO_PWHASH_OPSLIMIT_MODERATE' => 3,
    'SODIUM_CRYPTO_PWHASH_MEMLIMIT_MODERATE' => 268435456,
    'SODIUM_CRYPTO_PWHASH_OPSLIMIT_SENSITIVE' => 4,
    'SODIUM_CRYPTO_PWHASH_MEMLIMIT_SENSITIVE' => 1073741824,
    'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_SALTBYTES' => 32,
    'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_STRPREFIX' => '$7$',
    'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_INTERACTIVE' => 524288,
    'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_INTERACTIVE' => 16777216,
    'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_OPSLIMIT_SENSITIVE' => 33554432,
    'SODIUM_CRYPTO_PWHASH_SCRYPTSALSA208SHA256_MEMLIMIT_SENSITIVE' => 1073741824,
    'SODIUM_CRYPTO_SCALARMULT_BYTES' => 32,
    'SODIUM_CRYPTO_SCALARMULT_SCALARBYTES' => 32,
    'SODIUM_CRYPTO_SHORTHASH_BYTES' => 8,
    'SODIUM_CRYPTO_SHORTHASH_KEYBYTES' => 16,
    'SODIUM_CRYPTO_SECRETBOX_KEYBYTES' => 32,
    'SODIUM_CRYPTO_SECRETBOX_MACBYTES' => 16,
    'SODIUM_CRYPTO_SECRETBOX_NONCEBYTES' => 24,
    'SODIUM_CRYPTO_SIGN_BYTES' => 64,
    'SODIUM_CRYPTO_SIGN_SEEDBYTES' => 32,
    'SODIUM_CRYPTO_SIGN_PUBLICKEYBYTES' => 32,
    'SODIUM_CRYPTO_SIGN_SECRETKEYBYTES' => 64,
    'SODIUM_CRYPTO_SIGN_KEYPAIRBYTES' => 96,
    'SODIUM_CRYPTO_STREAM_NONCEBYTES' => 24,
    'SODIUM_CRYPTO_STREAM_KEYBYTES' => 32,
    'SODIUM_CRYPTO_STREAM_XCHACHA20_NONCEBYTES' => 24,
    'SODIUM_CRYPTO_STREAM_XCHACHA20_KEYBYTES' => 32,
    'SODIUM_BASE64_VARIANT_ORIGINAL' => 1,
    'SODIUM_BASE64_VARIANT_ORIGINAL_NO_PADDING' => 3,
    'SODIUM_BASE64_VARIANT_URLSAFE' => 5,
    'SODIUM_BASE64_VARIANT_URLSAFE_NO_PADDING' => 7,
    'SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_BYTES' => 32,
    'SODIUM_CRYPTO_SCALARMULT_RISTRETTO255_SCALARBYTES' => 32,
    'SODIUM_CRYPTO_CORE_RISTRETTO255_BYTES' => 32,
    'SODIUM_CRYPTO_CORE_RISTRETTO255_HASHBYTES' => 64,
    'SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES' => 32,
    'SODIUM_CRYPTO_CORE_RISTRETTO255_NONREDUCEDSCALARBYTES' => 64,
  ),
  'dependencies' => 
  array (
  ),
  'ini' => 
  array (
  ),
);

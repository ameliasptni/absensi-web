<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Firebase\JWT\SignatureInvalidException;
use Firebase\JWT\BeforeValidException;
use Firebase\JWT\ExpiredException;

class TokenController extends Controller
{
    public function generateToken(): View{
        {$key = 'example_key';
            $payload = [
                'date' => date('Ymd'),
                //'iat' => time(),
                'exp' => strtotime('tomorrow'),
            ];
            
            /**
             * IMPORTANT:
             * You must specify supported algorithms for your application. See
             * https://tools.ietf.org/html/draft-ietf-jose-json-web-algorithms-40
             * for a list of spec-compliant algorithms.
             */
            $jwt = JWT::encode($payload, $key, 'HS256');
        
            return view('admin.qrview', ['name' => $jwt]);
        }
    }
        public function verifyToken(Request $request):View {
            $token = $request->input('token');
        
            $key = 'example_key';
            $decoded ="";
            try{
                $decoded = JWT::decode($token, new Key($key, 'HS256'));
                //dd($decoded);
            } catch (SignatureInvalidException $e){
                dd("Invalid Signature");
            } catch (ExpiredException $e){
                dd("Expired");
            } catch(Exception $e){
                dd($e);
            }
            return view('absen',[
                "date"=>$decoded->date,
                "expire"=>$decoded->exp
            ]);
    }
}

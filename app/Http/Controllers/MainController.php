<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Cart;
use App\Models\MailContact;
use App\Mail\SendMailContact;
use Mail;

class MainController extends Controller
{
    public function home()
    {
        $new_products = Product::latest()->limit(4)->get();
        return view("client.home", compact('new_products'));
    }
    public function contact()
    {
        return view("client.contact", ['title' => "Liên hệ với chúng tôi"]);
    }
    public function storContact(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'phone' => 'required | min: 10 | regex: "/^0/"',
                'email' => 'required | email',
                'message' => 'max: 1000',
            ],
            [
                'name.required' => 'Tên bạn buộc phải nhập',
                'phone.required' => 'Số điện thoại buộc phải nhập',
                'phone.min' => 'Số điện thoại tối thiểu 10 kí tự',
                'phone.regex' => 'Số điện thoại bắt đầu là 0',
                'email.required' => 'Địa chỉ email buộc phải nhập',
                'email.email' => 'Địa chỉ email không đúng định dạng',
                'message.max' => 'Giới hạn nội dung là 1000 kí tự'
            ]
        );
        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $message = $request->message;

        $adminEmail = 'giangvanlinhbq89@gmail.com'; //Gửi thư đến ban quản trị
        session()->put('message', $message);
        $mail = Mail::mailer('smtp')->to($adminEmail)
            ->send(new SendMailContact($name, $email, $phone, $message));
        if ($mail) {
            MailContact::create([
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
                'message' => $message,
            ]);
        }
        return back();
    }

    public function about()
    {
        return view("client.about", ['title' => 'Giới thiệu']);
    }

}
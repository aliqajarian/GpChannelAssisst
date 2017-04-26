<?php
ob_start();
/*
─═ঊঈঊঈ═─╮
AntiSpamBot
V 1.o
Developer : mohammadhosseinheidari
Bot ID : @GpModeratorBot
Dev ID : @NOBLEST
GitAdress : Github.com/NobLestDev/DenyAntiSpam
─═ঊঈঊঈ═─╯
*/
define('API_KEY','توکن شما');
//-----------------------------------------------------------------------------------------
//فانکشن MrPHPBot :
function MrPHPBot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//-----------------------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$chat_id");
mkdir("data/$chat_id/$from_id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
mkdir("data/username.txt/$username");
$textmassage = $message->text;
$token = "توکن شما";
$step= file_get_contents("data/$from_id/file.txt");
$owners= file_get_contents("data/$chat_id/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$Dev = 193930120;
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->message->from->id;
$tc = $update->message->chat->type;
$namegroup = $update->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$rt = $update->message->reply_to_message;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$namegroup = $update->message->chat_title;
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument= file_get_contents("data/$chat_id/lockdecument.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh= file_get_contents("data/$chat_id/lockfosh.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$welcometext= file_get_contents("data/$chat_id/welcometext.txt");
//-----------------------------------------------------------------------------------------
//فانکشن ها : 
function SendMessage($chat_id, $text){
MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
}
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function sendAction($chat_id, $action){
MrPHPBot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
function Forward($berekoja,$azchejaei,$kodompayam)
{
MrPHPBot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
//-----------------------------------------------------------------------------------------
if($textmassage=="/start" && $tc == "private"){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام دوست خوبم من ربات منحصر به فرد دنی هستم \nقابلیت های متنوع من میتواند شما را شگفت انگیز کند\nقابلیت های من :\n>قابلیت مدیریت گروه\nاین قابلیت یکی از مهمترین قابلیت های این ربات است شما با این بخش میتوانید گروه خود را ضد لینک,اسپم,عکس و... کنید برای این کار کافی است من را به گروه خود ادد کنید :\n[اضافه کردن من به گروه](https://telegram.me/DenyroBot?startgroup=start)\n>ارسال کیبورد شیشه ای به کانال\nشما با این قابلیت میتوانید برای متن خود دکمه شیشه ای بسازید وبه کانال خود ارسال کنید\n>ایجاد متن با فرمت های مارک دون\nبا این قابلیت میتوانید متن های خود را با فرمت مارک دون بنویسید\nاین همه قابلیت به صورت رایگان عرضه میشود پس به ربات ما امتیاز بدهید :\n",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"بخش مدیریت گروه"]
	],
  	[
	['text'=>"ارسال کیبورد شیشه ای به کانال"]
	],
  [
	['text'=>"ایجاد متن با فرمت های مارک دون"]
	],
  [
	['text'=>"درباره ما"],['text'=>"ارسال نظر"]
	],
	]
	])
	]);
	}if($textmassage=="لغو" && $tc == "private"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"عملیات لغو شد :",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"بخش مدیریت گروه"]
	],
  	[
	['text'=>"ارسال کیبورد شیشه ای به کانال"]
	],
  [
	['text'=>"ایجاد متن با فرمت های مارک دون"]
	],
  [
	['text'=>"درباره ما"],['text'=>"ارسال نظر"]
	],
	]
	])
	]);
	}elseif($textmassage=="ایجاد متن با فرمت های مارک دون" && $tc == "private"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","markdown");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"متن خود را بفرستید :\nفرمول های مارک دون :\nدرشت کردن : *TEXT*\nکج کردن : _TEXT_ \nکد کردن : `TEXT` \nهایپر لینک :\n [TEXT](LINK)",
    'parse_mode'=>'html',
				'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"لغو"]
	],
	]
	])
	]);
	}elseif($step=="markdown"){
   save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"$textmassage",
      'parse_mode'=>'MarkDown',
	
	]);
	}
elseif($textmassage=="بخش مدیریت گروه" && $tc == "private"){
                        sendAction($chat_id, 'typing');
                        save("data/$from_id/file.txt","none");
			save("data/$from_id/file.txt","none");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"برای استفاده از امکانات مدیریت گروه من کافیه من رو به گروهت اضافه کنی توجه کنید باید برای مدیریت ربات در گروه دسترسی داشته باشید که با مراجعه به ربات پشتیبانی و ارسال لینک گروه میتوانید دسترسی را به صورت رایگان دریافت کنید :\nربات پشتیبانی : @DenySupportBot\n[اضافه کردن من به گروه](httos://telegram.me/DenyroBot?startgroup=start)\nنکته اصلی : ربات را مدیر گروه کنید.",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="درباره ما" && $tc == "private"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","none");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"این ربات در سال 1396 ساخته شد و  امیدوارهستیم که کاربران از این ربات به خوبی حمایت کنند\nمناسب برای مدیریت گروه و کانال.\nبرنامه نویس : محمدحسین حیدری\nزبان برنامه نویسی : php\nارتباط با ما : \n@NobLest\n@NobLestBot\n@DenySupportBot",
    'parse_mode'=>'MarkDown',
		]);
		}elseif($textmassage=="ارسال نظر"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","nazar");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"نظر خود را جهت بهبود کاربرد ربات را بفرستید :",
                 'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"لغو"]
	],
	]
	])
	
	]);
	
	
	}elseif($step=="nazar"){            
                       save("data/$from_id/file.txt","none");
                          Forward($Dev,$chat_id,$message_id);
			MrPHPBot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"نظر شما ارسال شد.\nبا تشکر از شما",
      'parse_mode'=>'MarkDown',
	
	]);
	
	
	}
elseif($textmassage=="ارسال کیبورد شیشه ای به کانال" && $tc == "private"){
                        sendAction($chat_id, 'typing');
			save("data/$from_id/file.txt","add");
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"بخش ارسال کیبورد شیشه ای به کانال\nجهت شروع متن خود را بفرستید\nدر غیر اینصورت برروی گزینه لغو کلیک کنید :",
   'parse_mode'=>'MarkDown',
		'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"لغو"]
	],
	]
	])
	]);
	}elseif($step=="add"){
                       save("data/$from_id/file.txt","add3");
                       save("data/$chat_id/textpost.txt","$textmassage");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"حالا لینک انتقال دکمه شیشه ای را بفرست :",
      'parse_mode'=>'MarkDown',
		'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"لغو"]
	],
	]
	])
	]);
	}elseif($step=="add3"){
                       save("data/$from_id/file.txt","add4");
                       save("data/$chat_id/linkpost.txt","$textmassage");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"نصف راه رو رفتیم الان نام دکمه شیشه ای رو بفرست :",
        'parse_mode'=>'MarkDown',
		'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"لغو"]
	],
	]
	])
	]);
	}
elseif($step=="add4"){
                       save("data/$from_id/file.txt","add5");
                        save("data/$chat_id/namepost.txt","$textmassage");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"حالا دوست عزیز یک پیام از کانال خود به ربات فروارد کنید :\nنکته مهم :ربات رو ابتدا مدیر کانال خود کنید .",
      'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>[
	[
	['text'=>"لغو"]
	],
	]
	])
	]);
	}elseif($step=="add5"){
                       save("data/$chat_id/channel.txt","$from_chat_id");
                       save("data/$from_id/file.txt","none");
			MrPHPBot('sendmessage',[
			'chat_id'=>$chat_id,
			'text'=>"کار تموم شد .\nانتخاب کنید :",
      'parse_mode'=>'MarkDown',
'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
	[
  ['text'=>"ارسال به کانال",'callback_data'=>"sc"],['text'=>"کانال ما",'url'=>"https://telegram.me/PowerFulTeam"]
	],
	]
	])
	]);
	}elseif($data=="sc"){
  sendAction($chatid, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$channel,
  'message_id'=>$messageid,
	'text'=>"$textpost",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
	[
	['text'=>"$namepost",'url'=>"$linkpost"]
	],
	]
	])
	]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chatid,
  'message_id'=>$messageid,
	'text'=>"با موفقیت ارسال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
 //groupmanager
elseif($textmassage=="/settings" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
save("data/$from_id/file.txt","none");
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`لیست تنظیمات گروه برای :`\n*[$chat_id]*\n`درخواست کننده :`\n*[$from_id]*",
  'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink",'callback_data'=>'text']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto",'callback_data'=>'text']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername",'callback_data'=>'text']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit",'callback_data'=>'text']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator",'callback_data'=>'text']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh",'callback_data'=>'text']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation",'callback_data'=>'text']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact",'callback_data'=>'text']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward",'callback_data'=>'text']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio",'callback_data'=>'text']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice",'callback_data'=>'text']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker",'callback_data'=>'text']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame",'callback_data'=>'text']
 ],
	]
	])
	]);
	}}
  elseif ($data == 'text')
{
MrPHPBot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"این ربات توسط تیم برنامه نویسی پاورفول نوشته شده است\n@PowerFulTeam",
]);
}
elseif (strpos($textmassage, "/setowner") !== false && $from_id == $Dev) {
$owner = str_replace("/setowner ","",$textmassage);
save("data/$from_id/file.txt","none");
MrPHPBot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"این فرد  _".$owner."_ مدیر گروه شد. ",
		'parse_mode'=>'MarkDown'
    		]);	
save("data/$chat_id/owner.txt","$owner");
}
elseif(preg_match("'^(.*)(https)(.*)'",$textmassage)){
preg_match("'^(https)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklink == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال لینک اخراج شد\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock link" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال لینک فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock link" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال لینک باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->photo){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockphoto == "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال عکس اخراج شد\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock photo" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال عکس فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock photo" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال عکس باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->edited_message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockedit== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ویرایش پیام اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock edit" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ویرایش پیام فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock edit" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ویرایش پیام باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgame== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل بازی کردن در گروه اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock edit" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل انجام بازی در گروه فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock edit" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل انجام بازی در گروه باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklocation== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل اشتراک گزاری مکان اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock location" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری مکان فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock location" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری مکان باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockcontact== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل اشتراک گزاری شماره اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock contact" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری شماره فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock contact" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل اشتراک گزاری شماره باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif(preg_match("'^(@)(.*)'",$textmassage)){
preg_match("'^(@)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال یوزرنیم اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock username" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock username" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockaudio== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال موسیقی اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock audio" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال موسیقی فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock audio" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال موسیقی باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvoice== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال صدا اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock voice" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال صدا فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock voice" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال صدا باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locksticker== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال استیکر اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock sticker" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال استیکر فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock sticker" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال استیکر باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->decument){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockdecument== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id1
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال فایل اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id1\nیوزرنیم : @$username1",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock decument" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock decument" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فایل باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->forward_from){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockforward== "✔️"){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
   ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل فوروارد کردن پیام اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock forward" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل فوروارد پیام فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="/unlock sticker" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل فوروارد پیام باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Operator
elseif(preg_match("'^(.*)(همراه اول)(.*)'",$textmassage)){
preg_match("'^(همراه اول)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل تبلیغات اوپراتور ها اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif(preg_match("'^(.*)(ایرانسل)(.*)'",$textmassage)){
preg_match("'^(ایرانسل)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل تبلیغات اوپراتور ها اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif(preg_match("'^(.*)(رایتل)(.*)'",$textmassage)){
preg_match("'^(رایتل)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل تبلیغات اوپراتور ها اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock operator" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock operator" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال تبلیغات اوپراتور ها باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Fosh
elseif(preg_match("'^(کس)(.*)'",$textmassage)){
preg_match("'^(کس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال فحش اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif(preg_match("'^(کس ننت)(.*)'",$textmassage)){
preg_match("'^(کس ننت)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال فحش اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif(preg_match("'^(بی ناموس)(.*)'",$textmassage)){
preg_match("'^(بی ناموس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال فحش اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif(preg_match("'^(دیوث)(.*)'",$textmassage)){
preg_match("'^(دیوث)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال فحش اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif(preg_match("'^(کیر)(.*)'",$textmassage)){
preg_match("'^(کیر)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
  save("data/$from_id/file.txt","none");
  sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به دلیل ارسال فحش اخراج شد.\nمشخصات فرد :\n شناسه کاربری : $from_id\nیوزرنیم : @$username",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
elseif($textmassage=="/lock fosh" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✔️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/unlock fosh" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✖️");
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال فحش باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_title){
if ($tc == 'group' | $tc == 'supergroup'){
$newname = $update->message->new_chat_title;
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"نام گروه تغییر یافت به : $newname",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
if ($newchatmemberid == "378460189"){
save("data/$chat_id/locklink.txt","✖️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✖️");
save("data/$chat_id/lockoperator.txt","✖️");
save("data/$chat_id/lockforward.txt","✖️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✖️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✖️");
save("data/$chat_id/welcome.txt","Welcome NewMember To Group");
sendAction($chat_id, 'typing');
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام و عرض ادب\n`من قابلیت های زیادی دارم برای دیدن قابلیت هام میتونی گزینه زیر روبفرستی \n/help\nخب حالا امکانات رو دیدی برای استفاده ازاین امکانات باید مدیر گروه من رو ادمین کنه\nوبعد از ادمین کردن باید لینک گروه را به پشتیبانی ربات بفرسته تا مقام بگیره درسریع ترین زمان ممکن انجام میگیره\nربات پشتیبانی :\n`@DenySupportBot",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
 elseif($textmassage=="/help"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>">راهنمای بخش دریافت تنظیمات و مدیریت کاربران
*[/]settings* ➖ (دریافت تنظیمات گروه به صورت اینلاین)
*[/]kick |reply|* ➖ (اخراج کاربر با ریپلی)
*➖➖➖➖➖➖*
>راهنمای دستورات مدیریتی
*[/]lock|unlock link* ➖ (فعال سازی/غیرفعال سازی قفل ارسال لینک)
*[/]lock|unlock username* ➖ (فعال سازی/غیرفعال سازی قفل ارسال یوزرنیم)
*[/]lock|unlock sticker* ➖ (فعال سازی/غیرفعال سازی قفل ارسال استیکر)
*[/]lock|unlock contact* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری شماره)
*[/]lock|unlock forward* ➖ (فعال سازی/غیرفعال سازی قفل ارسال فوروارد)
*[/]lock|unlock photo* ➖ (فعال سازی/غیرفعال سازی قفل ارسال تصویر)</code>
*[/]lock|unlock audio* ➖ (فعال سازی/غیرفعال سازی قفل ارسال موسیقی(Audio))
*[/]lock|unlock voice* ➖ (فعال سازی/غیرفعال سازی قفل ارسال صدا(Voice))
*[/]lock|unlock edit* ➖ (فعال سازی/غیرفعال سازی قفل ویرایش پیام)
*[/]lock|unlock game* ➖ (فعال سازی/غیرفعال سازی قفل انجام بازی در گروه)
*[/]lock|unlock location* ➖ (فعال سازی/غیرفعال سازی قفل اشتراک گزاری مکان)
*[/]lock|unlock fosh* ➖ (فعال سازی/غیرفعال سازی قفل فحاشی)
*[/]lock|unlock join* ➖ (فعال سازی/غیرفعال سازی قفل ورود به گروه)
*[/]lock|unlock operator* ➖ (فعال سازی/غیرفعال سازی قفل تبلیغات اوپراتورها)
*➖➖➖➖➖➖*",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
  elseif($rt && $textmassage=="/kick" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
sendAction($chat_id, 'typing');
	MrPHPBot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"اخراج شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="/info" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  sendAction($chat_id, 'typing');
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شناسه کاربری گروه : *$chat_id*\nنام گروه : *$namegroup*\nتعداد پیام ها : *$tedadmsg*\nنوع گروه : *$tc*",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
$users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="آمار ربات"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        sendAction($chat_id, 'typing');
				MrPHPBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
                'hide_keyboard'=>true,
		]);
		}elseif ($textmassage == 'ارسال به همه' && $from_id == $Dev) {
save("data/$from_id/file.txt","sendtoall");
         MrPHPBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     MrPHPBot('sendmessage',[
          'chat_id'=>$memuser,
          'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
} elseif ($textmassage == 'فروارد همگانی' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         MrPHPBot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
}        
?>

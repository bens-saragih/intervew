<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Articles;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Komentar;
use Redirect;
require 'slugModif.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


class PageController extends Controller
{


	public function __construct()
	{
		$this->middleware('login')->except('home','blogHome','articleDetail','about','authors','comentStore','contact','privacyPolicy','termsOfService','sendMail');
	}


	// GUESTS

	public function home()
	{


		// query get random artikel
		$randomArticles = Articles::inRandomOrder()->limit(6)->get();

		return view('page.home',['randomArticles' => $randomArticles]);
	}


	public function blogHome(Request $request)
	{	
		if ($request->cari) {

		$search = $request->cari;
		$articles = DB::table('articles')->where('judul','like',"%".$search."%")->paginate(6);
		$count = DB::table('articles')->where('judul','like',"%".$search."%")->count();
		$latestArticle = Articles::latest()->limit(3)->get();
		
		return view('page.blog',['articles' => $articles,'latests' => $latestArticle,'count'=>$count,'cari' => $search]);

		}

		else{
		$latestArticle = Articles::latest()->limit(3)->get();

		$articles = Articles::paginate(6);

		return view('page.blog',['articles' => $articles,'latests' => $latestArticle]);
		}
		
	}

	public function articleDetail(Request $request,$slug)
	{	


		if($request->isMethod('post'))
		{
			$id = $request->article_id;
			$getId = DB::table('articles')->where('id',$id)->get();
			$getSlug = $getId[0]->slug;
			// die($getSlug);
		$validateData = validator::make($request->all(),
				[
					'nama' => 'required|max:200',
					'email'	=> 'required|email',
					'pesan'	=> 'required'
				],
				[
					'required' => ':attribute wajib diisi',
					'max'	   => ':attribute maksimal berisi :max karakter',
					'email'	  => ':attribute tidak valid'
				]
				);

				if ($validateData->fails()) {
					return Redirect::route('articleDetail',$getSlug)->withErrors($validateData)->withInput();
				}

				

				else{
					$article = new Komentar();
					$article->nama = $request->nama;
					$article->email  = $request->email;
					$article->pesan= $request->pesan;
					$article->article_id= $request->article_id;
					$article->save();

					return  Redirect::route('articleDetail',$getSlug)->with('pesan',"Komentar kamu berhasil ditambahkan");


					}
		}
		

		// query detail data
		$result = DB::table('articles')->where('slug',$slug)->get();

		//query get latest artikel
		$latestArticle = Articles::latest()->limit(3)->get();

		// query get all komentar
		$id = $result[0]->id;

		$komentars = DB::select(
			"SELECT
			articles.judul as judul_artikel,
			komentars.id as id_komentar,
			komentars.nama as namaKomentator,
			komentars.pesan as pesanKomentar
			FROM articles JOIN komentars
			ON articles.id = komentars.article_id
			WHERE articles.id = $id
			ORDER BY komentars.id"
		);



		//sosmed share

		$shareButtons = \Share::page(
            'https://www.itsolutionstuff.com',
        )->facebook()->twitter()->linkedin()->telegram()->whatsapp()->reddit();
  
        $sosmed = Articles::get();

		return view('page.detail',['detail' => $result,'komentars'=>$komentars,'latestArticle' => $latestArticle,'sosmed' => $shareButtons]);
		

	}

	public function search(Request $request)
	{
		$search = $request->cari;
		$articles = DB::table('articles')->where('judul','like',"%".$search."%")->paginate(2);
		$latestArticle = Articles::latest()->limit(3)->get();
		dd($search);
		return view('page.blog',['articles' => $articles,'latests' => $latestArticle]);
	
	
	}


	public function comentStore(Request $request)
	{
		$validateData = validator::make($request->all(),
				[
					'nama' => 'required|max:200',
					'email'	=> 'required|email',
					'pesan'	=> 'required'
				],
				[
					'required' => ':attribute wajib diisi',
					'max'	   => ':attribute maksimal berisi :max karakter',
					'email'	  => ':attribute tidak valid'
				]
				);

				if ($validateData->fails()) {
					return redirect()->route("home")->withErrors($validateData)->withInput();
				}

				

				else{
					$article = new Komentar();
					$article->nama = $request->nama;
					$article->email  = $request->email;
					$article->pesan= $request->pesan;
					$article->article_id= $request->article_id;
					$article->save();

					return redirect()->route("home")->with('pesan',"Komentar kamu berhasil ditambahkan");


					}
	}


	// layanan

		public function about()
	{
		// 
		return view('page.layanan.about');
	}

	public function authors()
	{
		return view('page.layanan.authors');
	}


	public function contact()
	{
		return view('page.layanan.contact');
	}

	public function privacyPolicy()
	{
		return view('page.layanan.privacyPolicy');
	}

	public function termsOfService()
	{
		return view('page.layanan.termsOfService');
	}

	public function sendMail(Request $request)
	{
		$errors = [];

		if (empty($request->nama)) {

				$errors[] = "Nama wajib diisi";
				return redirect()->route("contact")->with('errors',$errors);
			}
		if (empty($request->email)) {
				$errors[] = "Email wajib diisi";
				return redirect()->route("contact")->with('errors',$errors);
			}
		if(empty($request->pesan)){
			$errors[] = "Pesan wajib diisi";
			return redirect()->route("contact")->with('errors',$errors);
		}	
		

		$subject = "Pesan dari " . $request->input('nama');
        $name = $request->input('nama');
        $email = $request->input('email');
        $pesan = $request->input('pesan');

        $mail = new PHPMailer(true);
        try{
        	$mail->IsSMTP();
        	$mail->SMTPAuth = true;
        	$mail->Username = 'aksaraped@gmail.com';
        	$mail->Password = 'sepertinya';
        	$mail->SMTPSecure = 'ssl';
        	$mail->Host = 'smtp.gmail.com';
        	$mail->Port = 465;
        	$mail->setFrom("aksaraped@gmail.com", "Aksaraped");
        	$mail->addAddress("aksaraped@gmail.com", "Aksaraped");
        	$mail->addReplyTo($email, $name);
        	$mail->isHTML(true);
            $mail->Subject = $subject;
            $mail->Body    = $pesan;
            $mail->AltBody = $pesan;
            $mail->send();

            return redirect()->route("contact")->with('status',"Terima kasih sudah menghubungi Aksaraped.. Kami akan membalas secepat mungkin :)");


        }

        catch (Exception $e) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        }

	}



	// ADMIN
	public function articlesHome()
	{
		$articles = Articles::all();
		return view('page.admin.index',['articles'=>$articles]);
	}

	public function articlesCreate()
	{
		return view('page.admin.create');
	}

	public function articlesStore(Request $request)
	{

		$validateData = validator::make($request->all(),
		[
			'judul' => 'required',
			'photo' => 'sometimes|file|image',
			'isi'	=> 'required|min:10',
		],
		[
			// 'unique'	=> 'judul :attribute sudah ada',
			'required' => ':attribute wajib diisi',
			'file'	   => 'hanya menerima upload photo bukan file lain',
			'max'	   => 'Ukuran :attribute maksimal :max mb',
			'min'	   => ':attribute minimal berisi :min karakter',
		]
		);	

		//kondisi cek dan simpan photo

		if($request->hasFile('photo')){
			$slug = Str::slug($request['judul']);
			$extFile = $request->photo->getClientOriginalExtension();
			$namaFile = $slug.time().".".$extFile;
			$request->photo->storeAs('public/uploads-img',$namaFile);
			// echo $request->photo->getSize();
		}

		else{
			$namaFile = $request->photo;
		}

		// dd($request->photo);
		if ($validateData->fails()) {
			return redirect()->route('YWRtaW5rYWg.create')->withErrors($validateData)->withInput();
		}


		else{
			$article = new Articles();
			$article->judul = $request->judul;
			$article->photo = $namaFile;
			$article->isi  = strip_tags($request->isi);
			$article->slug = make_slug($request->judul);
			$article->save();

			return redirect()->route('YWRtaW5rYWg.index')->with('pesan',"tambah data {$article->judul} berhasil");


		}

	}

	public function articlesEdit($slug)
	{
		$result = DB::table('articles')->where('slug',$slug)->get();
		return view('page.admin.edit',['article' => $result]);
	}

	public function articlesUpdate(Request $request ,Articles $article)
	{
		$validateData = validator::make($request->all(),
			[
				'judul' => 'required',
				'photo' => 'sometimes|file|image|max:2000',
				'isi'	=> 'required|min:10',
			],
			[
				'required' => ':attribute wajib diisi',
				'file'	   => 'hanya menerima upload photo bukan file lain',
				'max'	   => 'Ukuran :attribute maksimal :max mb',
				'min'	   => ':attribute minimal berisi :min karakter'
			]
			);	

			if($request->hasFile('photo')){
				$slug = Str::slug($request['judul']);
				$extFile = $request->photo->getClientOriginalExtension();
				$namaFile = $slug.time().".".$extFile;
				$request->photo->storeAs('public/uploads-img',$namaFile);
			}

			else{
				$namaFile = $request->photo;
			}
				if ($validateData->fails()) {
				return redirect()->route('YWRtaW5rYWg.edit')->withErrors($validateData)->withInput();
			}
			

			else{

				 $a = DB::table('articles')->where('id',$article->id)->update([
				 	'judul' => $request->judul,
				 	'photo' => $namaFile,
					'isi'	=> strip_tags($request->isi),
					'slug'	=>  make_slug($request->judul),
					'updated_at' => now(),
				]);				
				return redirect()->route('YWRtaW5rYWg.index',['article'=>$request->id])->with('pesan',"Update data {$article->judul} berhasil");

			}
	}

	public function articlesDelete(Articles $article)
	{
		$article->delete();
		return redirect()->route('YWRtaW5rYWg.index')->with('pesan',"Hapus data $article->judul berhasil"); 
	}

}

?>
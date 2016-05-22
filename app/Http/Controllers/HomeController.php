<?php    namespace App\Http\Controllers;

    use Illuminate\Http\Request;

    use App\Http\Requests;
    use App\Http\Controllers\Controller;
    use App\Product;
    use App\Country;
    use App\Factory;
    use DB;

    use Illuminate\Contracts\Validation\ValidationException;
    class HomeController extends Controller
    {
        
        public function index()
        {
        	$data= [
        	'title' => 'Создание товара',
    		'pagetitle' => '<i style="color:skyblue">Создание товара</i>',
            'products' => Product::latest()->paginate(4),
    		'country' => Country::latest(),
            'count' => Product::count()
        	];
        	return view('pages.products.index', $data);
        }

        public function add(Product $productModel, Request $request)
        {
            $validator =\Validator::make($request->all(), [
                'price' => 'required|integer',
                'name' => 'required',
                'description' => 'required',
            ]);
            if($validator->fails()){
                return redirect(route('home'))->withErrors($validator->errors());
            }else{
                $productModel->create($request->all()); 
                return redirect()->route('home'); 
            }
            
        }

        public function info($id)
        {
            $product = Product::find($id);
            return view('pages.products.info', ['product' => $product, 'title' =>'инфо','pagetitle' => '<i style="color:skyblue">Info товара</i>']);
        }
        public function productsjson()
        {
            $products= Product::all();
            return $products->toJson();
        }

        public function productjson($id)
        {
            $product= Product::find($id);
            return $product->toJson();
        }
        public function delete($id)
        {
            $product = Product::destroy($id);
            return redirect()->route('home');
        }
    }

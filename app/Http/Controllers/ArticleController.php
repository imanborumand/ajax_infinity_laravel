<?php

namespace App\Http\Controllers;

use App\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
	/**
	 * @param Request $request
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\JsonResponse|\Illuminate\View\View
	 * @throws \Throwable
	 */
	public function showArticles( Request $request)
	{
		$articles = Article::paginate(20);
		if ($request->ajax()) {
			$view = view('articles_ajax',compact('articles'))->render();
			return response()->json(['result'=>$view]);
		}
		return view('articles',compact('articles'));
	}
}

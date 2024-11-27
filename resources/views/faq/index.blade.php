@extends('layouts.app')

@section('content')
    <!-- Main Start -->
    <div class="container">
        <!-- Search Bar -->
        <h1 class="text-center">Hello, How Can We Help You?</h1><br>

        <div class="search-bar d-flex justify-content-center align-items-center">
            <form action="{{ route('faq.search') }}" method="GET" class="d-flex w-100 justify-content-center">
                <!-- Input pencarian dengan lebar yang lebih besar -->
                <input type="text" name="query" placeholder="Search for answers" value="{{ request()->query('query') }}" required class="form-control mr-2">

                <!-- Tombol Search -->
                <button type="submit" class="btn btn-outline-dark">Search</button>

                <!-- Tombol Clear Search -->
                <a href="{{ route('faq.search') }}" class="btn btn-outline-danger ml-2 d-flex align-items-center">Clear Search</a>
            </form>
        </div><br>

        <!-- FAQ Section -->
        <div class="faq-section text-center">
            <h3>Frequently Asked Questions</h3>

            <div>
                @if(isset($faqs))
                    <ul>
                        @foreach($faqs as $faq)
                            <li class="faq-item">
                                <h3>{{ $faq->question }}</h3>
                                <span class="icon">&#x25BC;</span> <!-- Icon for dropdown -->
                                <div class="faq-answer">
                                    <p>{{ $faq->answer }}</p>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                @else
                    <p>No results found.</p>
                @endif
            </div>
        </div>
    </div>
    <!-- Main End -->
@endsection

@section('styles')
    <style>
        .faq-item {
            background-color: #fff;
            color: #00274D;
            border-radius: 5px;
            margin-bottom: 10px;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .faq-item:hover {
            background-color: navy;
            color: #fff;
        }

        .faq-item h3 {
            margin: 0;
            font-size: 18px;
        }

        .faq-item .icon {
            font-size: 20px;
            cursor: pointer;
        }

        .faq-item .faq-answer {
            display: none;
            margin-top: 10px;
            color: #333;
            transition: color 0.3s ease; /* Menambahkan transisi untuk warna */
        }

        .faq-item.active .faq-answer {
            display: block;
        }

        .faq-item.active .icon {
            transform: rotate(180deg);
        }

        /* Mengubah warna teks jawaban ketika item di-hover */
        .faq-item:hover .faq-answer {
            color: #fff; /* Mengubah warna teks jawaban menjadi putih saat di-hover */
        }

        .search-bar input {
            width: 60%;
            padding: 10px;
            font-size: 18px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        .search-bar button {
            padding: 10px 15px;
            font-size: 18px;
            background-color: #e0e0e0;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        /* .search-bar {
            max-width: 1000px;
            margin: 0 auto;
            text-align: center;
        } */

        .reset-btn {
            margin-left: 10px;
            color: #fff;
            background-color: red;
            padding: 5px 10px;
            border-radius: 5px;
            text-decoration: none;
        }

        .reset-btn:hover {
            background-color: darkred;
        }
    </style>
@endsection

@section('scripts')
    <script>
        // JavaScript untuk toggle answer pada FAQ
        document.querySelectorAll('.faq-item').forEach(item => {
            item.addEventListener('click', () => {
                item.classList.toggle('active');
            });
        });
    </script>
@endsection
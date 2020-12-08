<div>
    @if(session()->has('message'))
        <div class="alert alert-success">{{ session('message') }}

        </div>
    @endif
    @include('livewire.create')
   
 
    <br>
    <!-- <table wire:poll.5000ms class="table table-bordered table-striped"> -->
    <table class="table table-bordered table-striped">

        <thead>
            <tr>
                <th>#</th>
                <th>Form Name</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        	
        @foreach($sampledata as $data)
        	<tr>
               <th>{{ $loop->index + 1 }}</th>	
        		<td><h1>{{ $data->name }}</h1></td>
        		
        		<td><a href="{{ url('/post_data/'.$data->id) }}" class="btn btn-primary w3-black">Post Data</a>

               
                <a href="{{ url('/view_data/'.$data->id) }}" class="btn btn-info w3-black">View</a>
                
                </td>
        	</tr>
        	@endforeach
        </tbody>

    </table>
</div>

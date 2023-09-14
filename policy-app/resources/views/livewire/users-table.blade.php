<div>

    <div class="w-5/6 flex pb-10">
        <div class="w-3/6 mx-1">
            <input wire:model.live="search" type="text" placeholder="Search the name ...."
                   class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
            />

        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model.live="sortField"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option value="id">ID</option>
                <option value="name">Name</option>
                <option value="email">Email</option>
                <option value="created_at">Sign Up Date</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>
        <div class="w-1/6 relative mx-1">
            <select wire:model.live="sortAsc"
                    class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                    id="grid-state">
                <option value="1">Ascending</option>
                <option value="0">Descending</option>
            </select>
            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                </svg>
            </div>
        </div>


    </div>
    @if($users->isNotEmpty())
        <table class="table-auto w-full mb-6">
            <thead>
            <tr>
                <th class="px-4 py-2">ID</th>
                <th class="px-4 py-2">Name</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Created At</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td class="border px-4 py-2">{{ $user->id }}</td>
                    <td class="border px-4 py-2">{{ $user->name }}</td>
                    <td class="border px-4 py-2">{{ $user->email }}</td>
                    <td class="border px-4 py-2">{{ $user->created_at->format('d/m/Y') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {!! $users->links() !!}
    @else
        <p class="text-center">Whoops! No users were found 🙁</p>
    @endif
    <div class="container mx-auto px-4" >
        <form class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" >
            <label for="fname">Name</label>
            <input type="text" wire:model.live="name" style="border:#4b5563 1px solid"/>
            <label for="femail">Email</label>
            <input type="text" wire:model.live="email" style="border:#4b5563 1px solid "/>
            <label for="fpassword">Password</label>
            <input type="text" wire:model.live="password" style="border:#4b5563 1px solid "/>
            <button type="button " wire:click="add" style="border:#4b5563 1px solid">Add</button>

        </form>
        <form class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
            <label for="fname">Name</label>
            <input type="text" wire:model.live="name" style="border:#4b5563 1px solid"/>
            <button class="" type="button" wire:click="delete" style="border:#4b5563 1px solid">Delete </button>

        </form>
    </div>


</div>

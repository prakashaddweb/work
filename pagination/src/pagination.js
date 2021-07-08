import {useEffect, useState} from 'react';
import paginationFactory from 'react-bootstrap-table2-paginator';
import BootstrapTable from 'react-bootstrap-table-next';
import ToolkitProvider, { Search } from 'react-bootstrap-table2-toolkit';
import filterFactory, { textFilter } from 'react-bootstrap-table2-filter';
import axios from 'axios';
const Pagination=()=>{
    const { SearchBar, ClearSearchButton } = Search;
    const [get,set]=useState([])
    const columns = [{
        dataField: 'id',
        text: 'id',
      }, {
        dataField: 'name',
        text: 'name',
        filter: textFilter(),
          sort: true
      }, {
        dataField: 'designation',
        text: 'designation'
      }];
    //  function onTableChange()
    //  {
    //      console.log("helo world")
    //  }
      const options = {
          showTotal:true,
          dataSize:100,
          totalSize:100,
        onSizePerPageChange: (sizePerPage, page) => {
          console.log('Size per page change!!!');
          console.log('Newest size per page:' + sizePerPage);
          console.log('Newest page:' + page);
        },
        onPageChange: (page, sizePerPage) => {
    
          console.log('Page change!!!');
          console.log('Newest size per page:' + sizePerPage);
          console.log('Newest page:' + page);
          let url=`http://localhost/pagination.php?page=${page}`
          axios.get(url).then(res=>res.data).then(data=>{
            set(data)
            console.log(data)
        })
        }
      };
    useEffect(()=>{
        options.onPageChange(1)
    },[])
    return(
        <div>
            <ToolkitProvider
                bootstrap4
                keyField="id"
                data={ get }
                
                columns={ columns }
                search
                >
                {
                    props => (
                    <div>
                        <h3>Input something at below input field:</h3>
                        <SearchBar { ...props.searchProps } />

                        <ClearSearchButton {...props.searchProps} />
                        <hr />
                        
                        <BootstrapTable
                        remote={true}
                        filter={ filterFactory() }
                        // remote={{search:true}}
                        // onTableChange={onTableChange}
                        pagination={paginationFactory(options)}
                        { ...props.baseProps }
                        />
                    </div>
                    )
                }
            </ToolkitProvider>
        </div>
    )
}

export default Pagination;
<section class="papers-industrial">
    <h1>VLDB 2019: Industrial Track Papers</h1>

    <p>
        <strong class="accepted-title">Tunable Consistency in MongoDB</strong>
        <span class="accepted-authors">
            <span class="author">Therese M Avitabile</span> (MongoDB),
            <span class="author">William Schultz</span> (MongoDB), and
            <span class="author">Alyson Cabral</span> (MongoDB)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Distributed databases offer high availability but can impose high costs on client applications in order to maintain strong consistency at all times. MongoDB is a document oriented database whose replication system provides a variety of consistency levels allowing client applications to select the trade-offs they want to make when it comes to consistency and latency, at a per operation level. In this paper we discuss the tunable consistency models in MongoDB replication and their utility for application developers. We discuss how the MongoDB replication system's speculative execution model and data rollback protocol help make this spectrum of consistency levels possible. We also present case studies of how these consistency levels are used in real world applications, along with a characterization of their performance benefits and trade-offs.
        </span>
    </p>

    <p>
        <strong class="accepted-title">SAP HANA goes private - From Privacy Research to Privacy Aware Enterprise Analytics</strong>
        <span class="accepted-authors">
            <span class="author">Stephan Kessler</span> (SAP),
            <span class="author">Jens Hoff</span> (SAP), and
            <span class="author">Johann-Christoph Freytag</span> (HU Berlin)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Over the last 20 years, the progress of information technology has allowed many companies to generate, integrate, store, and analyze data of unprecedented size and complexity. In many cases, this data is personal data and how it can be used is therefore subject to laws that depend on the specific countries and application domains. For example, the General Data Protection Regulation (GDPR) introduced in the European Union imposes strict rules on how personal data can be processed.  Analyzing personal data can create tremendous value, but at the same time companies must ensure that they remain legally compliant. Unfortunately, existing systems offer only limited or no support at all for processing personal data in a privacy-aware manner. Approaches that have emerged from the academic and industrial research environments need to be integrated into large systems (like enterprise systems) in a manageable and scalable way. In many IT environments, it is also desirable and necessary to combine and to integrate personal data with other (non-personal) data in a seamless fashion.  In this paper, we present the first steps that SAP has taken to provide its database management system HANA with privacy-enhanced processing capabilities, referred to in the following as SAP HANA Data Anonymization. Various goals on both the conceptual and technical levels were followed with the aim of providing SAP customers today with an integrated processing environment for personal and non-personal data.
        </span>
    </p>

    <p>
        <strong class="accepted-title">GALO: Guided Automated Learning for query workload re-Optimization</strong>
        <span class="accepted-authors">
            <span class="author">Guilherme Damasio</span> (University of Ontario Institute of Technology),
            <span class="author">Vincent Corvinelli</span> (IBM),
            <span class="author">Parke Godfrey</span> (York University),
            <span class="author">Piotr Mierzejewski</span> (IBM),
            <span class="author">Alexandar Mihaylov</span> (University of Ontario Institute of Technology),
            <span class="author">Jaroslaw Szlichta</span> (University of Ontario Institute of Technology and IBM), and
            <span class="author">Calisto Zuzarte</span> (IBM)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Query optimization is a hallmark of database systems enabling complex SQL queries of today's applications to be run efficiently. The query optimizer often fails to find the best plan, when logical subtleties in business queries and schemas circumvent it. When a query runs more expensively than is viable or warranted, determination of the performance issues is usually performed manually in consultation with experts through the analysis of query's execution plan (QEP). However, this is an excessively time consuming, human error-prone, and costly process. GALO is a novel system that automates this process. The tool automatically learns recurring problem patterns in query plans over workloads in an offline learning phase, to build a knowledge base of plan-rewrite remedies. It then uses the knowledge base online to re-optimize queries queued for execution to improve performance, often quite drastically.  GALO's knowledge base is built on RDF and SPARQL, W3C graph database standards, which is well suited for manipulating and querying over SQL query plans, which are graphs themselves. GALO acts as a third-tier of re-optimization, after query rewrite and cost-based optimization, as a \emph{query-plan rewrite}. For generality, the context of knowledge base problem patterns, including table and column names, is abstracted with canonical symbol labels. Since the knowledge base is not tied to the context of supplied QEPs, table and column names are matched automatically during the re-optimization phase. Thus, problem patterns learned over a particular query workload can be applied in other query workloads. GALO's knowledge base is also an invaluable tool for database experts to debug query performance issues by tracking to known issues and solutions as well as refining the optimizer with new and better tuned techniques by the development team. We demonstrate an experimental study of the effectiveness of our techniques over synthetic TPC-DS and real IBM client query workloads.
        </span>
    </p>

    <p>
        <strong class="accepted-title">AliGraph: A Comprehensive Graph Neural Network Platform</strong>
        <span class="accepted-authors">
            <span class="author">Rong Zhu</span> (Alibaba Group),
            <span class="author">Kun Zhao</span> (Alibaba Group),
            <span class="author">Hongxia Yang</span> (Alibaba Group),
            <span class="author">Wei Lin</span> (Alibaba Group),
            <span class="author">Chang Zhou</span> (Alibaba Group),
            <span class="author">Baole Ai</span> (Alibaba Group),
            <span class="author">Yong Li</span> (Alibaba Group), and
            <span class="author">Jingren Zhou</span> (Alibaba Group)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            An increasing number of machine learning tasks require dealing with large graph datasets, which capture rich and complex relationship among potentially billions of elements. Graph Neural Network (GNN) becomes an effective way to address the graph learning problem by converting the graph data into a low dimensional space while keeping both the structural and property information to the maximum extent and constructing a neural network for training and referencing. However, it is challenging to provide an efficient graph storage and computation capabilities to facilitate GNN training and enable development of new GNN algorithms. In this paper, we present a comprehensive graph neural network system, namely AliGraph, which consists of distributed graph storage, optimized sampling operators and runtime to efficiently support not only existing popular GNNs but also a series of in-house developed ones for different scenarios. The system is currently deployed at Alibaba to support a variety of business scenarios, including product recommendation and personalized search at Alibaba's E-Commerce platform. By conducting extensive experiments on a real-world dataset with 492.90 million vertices, 6.82 billion edges and rich attributes, AliGraph performs an order of magnitude faster in terms of graph building (5 minutes vs hours reported from the state-of-the-art PowerGraph platform). At training, AliGraph runs 40%-50% faster with the novel caching strategy and demonstrates around 12 times speed up with the improved runtime. In addition, our in-house developed GNN models all showcase their statistically significant superiorities in terms of both effectiveness and efficiency (e.g., 4.12%--17.19% lift by F1 scores).
        </span>
    </p>

    <p>
        <strong class="accepted-title">Yugong: Geo-Distributed Data and Job Placement at Scale</strong>
        <span class="accepted-authors">
            <span class="author">Yuzhen Huang</span> (The Chinese University of Hong Kong),
            <span class="author">Yingjie Shi</span> (Alibaba Group),
            <span class="author">Zheng Zhong</span> (The Chinese University of Hong Kong),
            <span class="author">Yihui Feng</span> (Alibaba Group),
            <span class="author">James Cheng</span> (The Chinese University of Hong Kong),
            <span class="author">Jiwei Li</span> (Alibaba Group),
            <span class="author">Haochuan Fan</span> (Alibaba Group),
            <span class="author">Chao Li</span> (Alibaba Group),
            <span class="author">Tao Guan</span> (Alibaba Group), and
            <span class="author">Jingren Zhou</span> (Alibaba Group)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Companies like Alibaba operate tens of data centers (DCs) across geographically distributed locations. These DCs collectively provide the storage space and computing power for the entire company, storing EBs of data and serving millions of batch analytics jobs every day. In Alibaba, as our business grows, there are more and more cross-DC dependencies caused by jobs reading data from remote DCs. Consequently, the precious wide area network bandwidth becomes a major bottleneck for operating geo-distributed DCs at such scale. In this paper, we present Yugong ---  a system that manages data placement and job placement in Alibaba's geo-distributed DCs, with the objective to minimize cross-DC bandwidth usage. Yugong uses three methods, namely project placement, table replication, and job outsourcing, to address the main issues of high bandwidth consumption across the DCs. We give the details of Yugong's design and implementation for the three methods, and how it cooperates with other systems (e.g., Alibaba's big data analytics platform and cluster scheduler) to improve the productivity of the DCs. We also report extensive performance evaluation results that validate the significant improvements made by Yugong in cross-DC bandwidth usage (76\% of the total cost reduction).
        </span>
    </p>

    <p>
        <strong class="accepted-title">S3: A Scalable In-memory Skip-List Index for Key-Value Store</strong>
        <span class="accepted-authors">
            <span class="author">Jingtian Zhang</span> (Zhejiang University),
            <span class="author">Sai Wu</span> (Zhejiang University),
            <span class="author">Zeyuan Tan</span> (Zhejiang University),
            <span class="author">Gang Chen</span> (Zhejiang University),
            <span class="author">Zhushi Cheng</span> (Alibaba),
            <span class="author">Wei Cao</span> (Alibaba),
            <span class="author">Yusong Gao</span> (Alibaba Cloud), and
            <span class="author">Xiaojie Feng</span> (Alibaba Cloud)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Many new memory indexing structures have been proposed and outperform current in-memory skip-list index adopted by LevelDB, RocksDB and other key-value systems. However, those new indexes cannot be easily intergrated with key-value systems, because most of them do not consider how the data can be efficiently flushed to disk. Some assumptions, such as fixed size key and value, are unrealistic for real applications.  In this paper, we present S3, a scalable in-memory skip-list index for the customized version of RocksDB in Alibaba Cloud. S3 adopts a two-layer structure. In the top layer, a cache-sensitive structure is used to maintain a few guard entries to facilitate the search over the skip-list. In the bottom layer, a semi-ordered skip-list index is built to support highly concurrent insertions and fast lookup and range query. To further improve the performance, we train a neural model to select guard entries intelligently  according to the data distribution and query distribution. Experiments on multiple datasets show that S3 achieves a comparable performance to other new memory indexing schemes, and can replace current in-memory skip-list of LevelDB and RocksDB to support huge volume of data.
        </span>
    </p>

    <p>
        <strong class="accepted-title">QTune: A Query-Aware Database Tuning System with Deep Reinforcement Learning</strong>
        <span class="accepted-authors">
            <span class="author">Guoliang Li</span> (Tsinghua University),
            <span class="author">Xuanhe Zhou</span> (Tsinghua University),
            <span class="author">Bo Gao</span> (Huawei), and
            <span class="author">Shifu Li</span> (Huawei)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Database knob tuning is very important to achieve high performance (e.g., high throughput and low latency). However, knob tuning is an NP-hard problem and existing methods have several limitations. First, DBAs cannot tune a lot of database instances on different database environments. Second, existing machine-learning methods either cannot find good configurations or rely on a lot of training examples which are rather hard to obtain.    To address these problems, in this paper, we propose a query-aware database tuning system \oursys with a deep reinforcement learning (DRL) model. \oursys first vectorizes the SQL queries by considering rich features of the SQL queries, including query type,  tables, query cost.  Then \oursys feeds the query vectors  into the DRL model to  dynamically choose suitable configurations. We propose a  DRL model using the the actor critic networks, which predicts the database changes based on the query vector and the actor critic networks to find optimal configurations according to both the current and predicted database states. In this way the model captures the query changes and dynamically tune the database to achieve high performance. Experimental results show that \oursys achieves high performance and outperforms the state-of-the-art tuning methods.
        </span>
    </p>

    <p>
        <strong class="accepted-title">A Distributed System for Large-scale n-gram Language Models at Tencent</strong>
        <span class="accepted-authors">
            <span class="author">Qiang Long</span> (Tencent),
            <span class="author">Wei Wang</span> (NUS),
            <span class="author">Jinfu Deng</span> (Tencent),
            <span class="author">Song Liu</span> (Tencent),
            <span class="author">Wenhao Huang</span> (Tencent),
            <span class="author">Fangying Chen</span> (Tencent), and
            <span class="author">Sifan Liu</span> (Tencent)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            n-gram language models are widely used in language processing applications, e.g. automatic speech recognition (ASR), for ranking the candidate word sequences generated from the generator model, e.g. the acoustic model. Large n-gram models typically give good ranking results; however, they require a huge amount of memory storage. While distributing the model across multiple nodes resolves the memory issue, it nonetheless incurs a huge network communication overhead and introduces a different bottleneck. In this paper, we present our distributed system developed at Tencent with novel optimization techniques for reducing the network overhead, including distributed indexing, batching and caching. They reduce the network requests and accelerate the operation on each single node. We also propose a cascade fault-tolerance mechanism which adaptively switches to small n-gram models depending on the severity of the failure. Experimental study on 9 ASR datasets confirms that our distributed system scales to large models efficiently, effectively and robustly. We have successfully deployed it for Tencent's WeChat ASR with the peak network traffic at the scale of 100 millions of messages per minute.
        </span>
    </p>

    <p>
        <strong class="accepted-title">TitAnt: Online Real-time Transaction Fraud Detection in Ant Financial</strong>
        <span class="accepted-authors">
            <span class="author">Shaosheng Cao</span> (Ant Financial Services Group),
            <span class="author">Xinxing Yang</span> (Ant Financial Services Group),
            <span class="author">Cen Chen</span> (Ant Financial Services Group),
            <span class="author">Jun Zhou</span> (Ant Financial Services Group),
            <span class="author">Xiaolong Li</span> (Ant Financial Services Group), and
            <span class="author">Yuan Qi</span> (Ant Financial Services Group)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            With the explosive growth of e-commerce and the booming of e-payment, detecting online transaction fraud in real time has become increasingly important to Fintech business. To tackle this problem, in this paper, we introduce the TitAnt, an active detection system deployed in Ant Financial, one of the largest Fintech company in the world. The system is able to predict real-time online transaction fraud in mere milliseconds. We present the problem analysis, feature extraction, detection methods, implementation and deployment of the system, as well as practical effectiveness. Extensive experiments have been conducted on large real-world transaction data to show the effectiveness and the efficiency of the proposed system.
        </span>
    </p>

    <p>
        <strong class="accepted-title">DDSketch: A Fast and Fully-Mergeable Quantile Sketch with Relative-Error Guarantees</strong>
        <span class="accepted-authors">
            <span class="author">Homin Lee</span> (Datadog),
            <span class="author">Charles Masson</span> (Datadog), and
            <span class="author">Jee Rim</span> (Datadog)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Summary statistics such as the mean and variance are easily maintained for large, distributed data streams, but order statistics (i.e., sample quantiles) can only be approximately summarized. There is extensive literature on maintaining quantile sketches where the emphasis has been on bounding the rank error of the sketch while using little memory. Unfortunately, rank error guarantees do not preclude arbitrarily large relative errors, and this often occurs in practice when the data is heavily skewed.   Given the distributed nature of contemporary large-scale systems, another crucial property for quantile sketches is mergeablility, i.e., several combined sketches must be as accurate as a single sketch of the same data. We present the first fully-mergeable, relative-error quantile sketching algorithm with formal guarantees. The sketch is extremely fast and accurate, and is currently being used by Datadog at a wide-scale.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Constant Time Recovery in Azure SQL Database</strong>
        <span class="accepted-authors">
            <span class="author">Panagiotis Antonopoulos</span> (Microsoft),
            <span class="author">Peter Byrne</span> (Microsoft),
            <span class="author">Wayne Chen</span> (Microsoft),
            <span class="author">Cristian Diaconu</span> (Microsoft),
            <span class="author">Raghavendra Kodandaramaih</span> (Microsoft),
            <span class="author">Hanuma Kodavalla</span> (Microsoft),
            <span class="author">Prashanth Purnananda</span> (Microsoft),
            <span class="author">Adrian-Leonard Radu</span> (Microsoft),
            <span class="author">Chaitanya Sreenivas Ravella</span> (Microsoft), and
            <span class="author">Girish Venkataramanappa</span> (Microsoft)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Azure SQL Database and the upcoming release of SQL Server introduce a novel database recovery mechanism that combines traditional ARIES recovery with multi-version concurrency control to achieve database recovery in constant time, regardless of the size of user transactions. Additionally, our algorithm enables continuous transaction log truncation, even in the presence of long running transactions, therefore allowing large data modifications using only a small, constant amount of log space. These capabilities are particularly important for any Cloud database service given a) the constantly increasing database sizes, b) the frequent failures of commodity hardware, c) the strict availability requirements of modern, global applications and d) the fact that software upgrades and other maintenance tasks are managed by the Cloud platform, therefore, introducing unexpected failures for the users. This paper describes the design of our recovery algorithm and demonstrates how it allowed us to improve the availability of Azure SQL Database by guaranteeing consistent recovery times of under 3 minutes for 99.999% of recovery cases in production.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Updating Graph Databases with Cypher</strong>
        <span class="accepted-authors">
            <span class="author">Alastair Green</span> (Neo4j),
            <span class="author">Paolo Guagliardo</span> (University of Edinburgh),
            <span class="author">Leonid Libkin</span> (University of Edinburgh),
            <span class="author">Tobias Lindaaker</span> (Neo4j),
            <span class="author">Victor Marsault</span> (LIGM, UPEM/ESIEE-Paris/ENPC/CNRS),
            <span class="author">Stefan Plantikow</span> (Neo4j),
            <span class="author">Martin Schuster</span> (University of Edinburgh),
            <span class="author">Petra Selmer</span> (Neo4j), and
            <span class="author">Hannes Voigt</span> (Neo4j)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            The paper describes the present and the future of graph updates in Cypher, the language of the Neo4j property graph database and several other products. Update features include those with clear analogs in relational databases, as well as those that do not correspond to any relational operators. Moreover, unlike SQL, Cypher updates can be arbitrarily intertwined with querying clauses. After presenting the current state of update features, we point out their shortcomings, most notably violations of atomicity and nondeterministic behavior of updates. These have not been previously known in the Cypher community. We then describe the industry-academia collaboration on designing a revised set of Cypher update operations. Based on discovered shortcomings of update features, a number of possible solutions were devised. They were presented to key Cypher users, who were given the opportunity to comment on how update features are used in real life, and on their preferences for proposed fixes. As the result of the consultation, a new set of update operations for Cypher were designed. Those led to a streamlined syntax, and eliminated the unexpected and problematic behavior that original Cypher updates exhibited.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Smile: A System to Support Machine Learning on EEG Data at Scale</strong>
        <span class="accepted-authors">
            <span class="author">Lei Cao</span> (MIT),
            <span class="author">Wenbo Tao</span> (MIT),
            <span class="author">Sungtae An</span> (Georgia Institue of Technology),
            <span class="author">Jing Jin</span> (Massachusetts General Hospital),
            <span class="author">Yizhou Yan</span> (MIT),
            <span class="author">Xiaoyu Liu</span> (MIT),
            <span class="author">Wendong Ge</span> (Massachusetts General Hospital),
            <span class="author">Adam Sah</span> (MIT),
            <span class="author">Leilani Battle</span> (University of Maryland),
            <span class="author">Jimeng Sun</span> (CS),
            <span class="author">Remco Chang</span> (Tufts University),
            <span class="author">Brandon Westover</span> (Massachusetts General Hospital),
            <span class="author">Samuel Madden</span> (MIT), and
            <span class="author">Michael Stonebraker</span> (MIT)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            In order to reduce the possibility of neural injury from seizures, it is critical to automatically detect and classify ``interictal-ictal continuum'' (IIC) patterns from EEG data. However, the existing IIC classification techniques are shown to be not accurate and robust enough for clinical use because of the lack of high quality labels of EEG segments as training data. Obtaining high-quality labeled data is traditionally a manual process by trained clinicians that can be tedious, time-consuming, and error-prone. In this work, we propose Smile, an industrial scale system that provides an end-to-end solution to the IIC pattern classification problem. The core components of Smile include a visualization-based time series labeling module and a deep-learning based active learning module. The labeling module enables the users to explore and label 350 million EEG segments (30TB) at interactive speed. The multiple coordinated views allow the users to examine the EEG signals from both time domain and frequency domain simultaneously. The active learning module first trains a deep neural network that automatically extracts both the local features with respect to each segment itself and the long term dynamics of the EEG signals to classify IIC patterns. Then leveraging the output of the deep learning model, the EEG segments that can best improve the model are selected and prompted to clinicians to label. This process is iterated until the clinicians and the models show high degree of agreement. Our initial experimental results show that our Smile system allows the clinicians to label the EEG segments at will with a response time below 500 ms. The accuracy of the model is progressively improved as more and more high quality labels are acquired over time.
        </span>
    </p>

    <p>
        <strong class="accepted-title">A Morsel-Driven Query Execution Engine for Heterogeneous Multi-Cores</strong>
        <span class="accepted-authors">
            <span class="author">Kayhan Dursun</span> (Brown University),
            <span class="author">Carsten Binnig</span> (TU Darmstadt),
            <span class="author">Ugur Cetintemel</span> (Brown University),
            <span class="author">Weiwei Gong</span> (Oracle America), and
            <span class="author">Garret Swart</span> (Oracle)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Currently, we face the next major shift in processor designs that arose from the physical limitations known as the "dark silicon effect". Due to thermal limitations and shrinking transistor sizes, multi-core scaling is coming to an end. A major new direction that hardware vendors are currently investigating involves specialized and energy-efficient hardware accelerators (e.g., ASICs) placed on the same die as the normal CPU cores.  In this paper, we present a novel query processing engine called SiliconDB that targets such heterogeneous processor environments. We leverage the Sparc M7 platform to develop and test our ideas. Based on the SSB benchmarks, as well as other micro benchmarks, we compare the efficiency of SiliconDB with existing execution strategies that make use of co-processors (e.g., FPGAs, GPUs) and demonstrate speed-up improvements of up to 2x.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Choosing A Cloud DBMS: Architectures and Tradeoffs </strong>
        <span class="accepted-authors">
            <span class="author">Junjay Tan</span> (Brown University),
            <span class="author">Matthew Perron</span> (MIT),
            <span class="author">Xiangyao Yu</span> (MIT),
            <span class="author">Thanaa Ghanem</span> (Metropolitan State University, USA),
            <span class="author">Michael Stonebraker</span> (MIT),
            <span class="author">David DeWitt</span> (MIT),
            <span class="author">Marco Serafini</span> (University of Massachusetts, Amherst),
            <span class="author">Ashraf Aboulnaga</span> (Qatar Computing Research Institute, HBKU), and
            <span class="author">Tim Kraska</span> (MIT)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            As analytic (OLAP) applications move to the cloud, DBMSs have shifted from employing a pure shared-nothing design with locally attached storage to a hybrid design that combines the use of shared-storage (e.g. S3) with the use of shared-nothing query execution mechanisms. This paper sheds light on the resulting tradeoffs, which have not been properly identified in previous work. To this end, it evaluates the TPC-H benchmark across a variety of DBMS offerings running in a cloud environment (AWS) on fast 10Gb+ networks, specifically database-as-a-service offerings (Redshift, Athena), query engines (Presto, Hive), and a traditional cloud agnostic OLAP database (Vertica). While these comparisons cannot be apples-to-apples in all cases due to cloud configuration restrictions, we nonetheless identify patterns and design choices that are advantageous. These include prioritizing low-cost object stores like S3 for data storage, using system agnostic, yet still performant, columnar formats like ORC that allow easy switching to different systems for workloads, and showing that local caching is not always advantageous and may be disadvantageous in some cases.
        </span>
    </p>

    <p>
        <strong class="accepted-title">A Lightweight and Efficient Temporal Database Management System in TDSQL</strong>
        <span class="accepted-authors">
            <span class="author">Wei Lu</span> (Renmin university of china),
            <span class="author">Zhanhao Zhao</span> (Renmin University of China),
            <span class="author">Xiaoyu Wang</span> (Tencent Inc., China),
            <span class="author">Haixiang Li</span> (Tencent Inc., China),
            <span class="author">Zhenmiao Zhang</span> (Renmin university of China),
            <span class="author">Zhiyu Shui</span> (Renmin University of China),
            <span class="author">Sheng Ye</span> (Tencent Inc., China),
            <span class="author">Anqun Pan</span> (Tencent Inc., China), and
            <span class="author">Xiaoyong Du</span> (Renmin University of China)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Tencent provides comprehensive services, such as WeChat, games, payment, cloud storage and computing, serving billions of users and millions of enterprises. Driven by the recent adoption of temporal expressions into SQL:2011, extensions of temporal support in conventional database management systems (a.b.a. DBMSs) have re-emerged as a research hotspot. In this paper, we present a lightweight yet efficient built-in temporal implementation in TDSQL, which is the Tencent's distributed database management system that successfully supports enterprise-internal critical services. The novelty of TDSQL’s temporal implementation includes: (1) a new temporal data model with the extension of SQL:2011, (2) a built-in temporal implementation with various optimizations in TDSQL, which is also applicable to other DBMSs, (3) a low-storage-consumption in which only data changes are maintained. Besides providing three real temporal applications that adopt TDSQL, we carry out extensive performance evaluations with other temporal databases over one real application and two synthetic benchmarks, and the results show that TDSQL is lightweight and efficient.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Customizable and Scalable Fuzzy Join for Big Data</strong>
        <span class="accepted-authors">
            <span class="author">Zhimin Chen</span> (Microsoft Research),
            <span class="author">Yue Wang</span> (Microsoft Research),
            <span class="author">Vivek Narasayya</span> (Microsoft Research), and
            <span class="author">Surajit Chaudhuri</span> (Microsoft Research)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Fuzzy join is an important primitive for data cleaning. The ability to customize fuzzy join is crucial to allow applications to address domain-specific data quality issues such as synonyms and abbreviations. While efficient indexing techniques exist for single-node implementations of customizable fuzzy join, the state-of-the-art scale-out techniques do not support customization, and exhibit poor performance and scalability characteristics. We describe the design of a scale-out fuzzy join operator that supports customization. We use a locality-sensitive-hashing (LSH) based signature scheme, and introduce optimizations that result in significant speed up with negligible impact on recall. We evaluate our implementation on the Azure Databricks version of Spark using several real-world and synthetic data sets. We observe speedups exceeding 50X compared to the best-known prior scale-out technique, and close to linear scalability with data size and number of nodes.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Adapting TPC-C Benchmark to Measure Performance of Multi-Document Transactions in MongoDB</strong>
        <span class="accepted-authors">
            <span class="author">Asya Kamsky</span> (MongoDB, Inc)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            MongoDB is a popular distributed database that supports replication, horizontal partitioning (sharding), a flexible document schema and ACID guarantees on the document level. While it is generally grouped with ``NoSQL'' databases, MongoDB provides many features similar to those of traditional RDBMS such as secondary indexes, an ad hoc query language, support for complex aggregations, and new as of version 4.0 multi-statement, multi-document ACID transactions.   We looked for a well understood OLTP workload benchmark to use in our own system performance test suite to establish a baseline of transaction performance to enable flagging performance regressions, as well as improvements as we continue to add new functionality. While there exist many published and widely used benchmarks for RDBMS OLTP workloads, there are none specifically for document databases.    This paper describes the process of adapting an existing traditional RDBMS benchmark to MongoDB query language and transaction semantics to allow measuring transaction performance.  We chose to adapt the TPC-C benchmark even though it assumes a relational database schema and SQL, hence extensive changes had to be made to stay consistent with MongoDB best practices.  Our goal did not include creating official TPC-C certifiable results, however, every attempt was made to stay consistent with the spirit of the original benchmark specification as well as to be compliant to all specification requirements where possible.    We discovered that following best practices for document schema design achieves better performance than using required normalized schema.  All configuration and results are summarized in the Appendix and all the source code used and validation scripts are published in github to allow the reader to recreate and verify our results.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Procella: Unifying serving and analytical data at YouTube</strong>
        <span class="accepted-authors">
            <span class="author">Roee Ebenstein</span> (Google),
            <span class="author">Biswapesh Chattopadhyay</span> (Google),
            <span class="author">Priyam Dutta</span> (Google),
            <span class="author">Ott Tinn</span> (Google),
            <span class="author">Aniket Mokashi</span> (Google),
            <span class="author">Andrew McCormick</span> (Google),
            <span class="author">Paul Harvey</span> (Google),
            <span class="author">Sagar Mittal</span> (Google),
            <span class="author">Hector Gonzalez</span> (Google),
            <span class="author">Hung-ching Lee</span> (Google),
            <span class="author">Luis Perez</span> (Google),
            <span class="author">Neil McKay</span> (Google),
            <span class="author">Nikita Mikhaylin</span> (Google),
            <span class="author">David Lomax</span> (Google),
            <span class="author">Tony Xu</span> (Google),
            <span class="author">Farhad Shahmohammadi</span> (Google),
            <span class="author">Xiaoyan Zhao</span> (Google),
            <span class="author">Brett Elliott</span> (Google),
            <span class="author">Weiran Liu</span> (Google),
            <span class="author">Vera Lychagina</span> (Google), and
            <span class="author">Selcuk Aya</span> (Google)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            Large organizations like YouTube are dealing with exploding data volume and increasing demand for data driven applications. Broadly, these can be categorized as: reporting and dashboarding, embedded statistics in pages, time-series monitoring, and ad-hoc analysis. Typically, organizations build specialized infrastructure for each of these use cases. This, however, creates silos of data and processing, and results in a complex, expensive, and harder to maintain infrastructure.  At YouTube, we solved this problem by building a new SQL query engine -- Procella. Procella implements a super-set of capabilities required to address all of the four use cases above, with high scale and performance, in a single product. Today, Procella serves over a hundred billion queries per day across all four workloads at YouTube and several other Google product areas.
        </span>
    </p>

    <p>
        <strong class="accepted-title">AnalyticDB: Real-time OLAP Database System at Alibaba Cloud</strong>
        <span class="accepted-authors">
            <span class="author">Chaoqun Zhan (Alibaba Inc.),
            <span class="author">Maomeng Su</span> (Alibaba),
            <span class="author">Chuangxian Wei</span> (Alibaba),
            <span class="author">Xiaoqiang Peng</span> (Alibaba),
            <span class="author">Liang Lin</span> (Alibaba),
            <span class="author">Sheng Wang</span> (Alibaba Group),
            <span class="author">Zhe Chen</span> (Alibaba),
            <span class="author">Feifei Li</span> (Alibaba),
            <span class="author">Yue Pan</span> (Alibaba),
            <span class="author">Fang Zheng</span> (Alibaba), and
            <span class="author">Chengliang Chai</span> (Alibaba)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            With data explosion in scale and variety, OLAP databases play an increasingly important role in serving real-time analysis with low latency (e.g., hundreds of milliseconds), especially when incoming queries are complex and ad hoc in nature.  Moreover, these systems are expected to provide high query concurrency and write throughput, and support queries over structured and complex data types (e.g., JSON, vector and texts).   In this paper, we introduce AnalyticDB, a real-time OLAP database system developed at Alibaba. AnalyticDB maintains all-column indexes in an asynchronous manner with acceptable overhead, which provides low latency for complex ad-hoc queries.  Its storage engine extends hybrid row-column layout for fast retrieval of both structured data and data with complex data types.  To handle large-scale data with high query concurrency and write throughput, AnalyticDB decouples read and write access paths. To further reduce query latency, novel storage-aware SQL optimizer and execution engine are developed to fully utilize the advantages of the underlying storage and indexes. AnalyticDB has been successfully deployed on Alibaba Cloud to serve numerous customers (either large or small).  It is capable of holding 100 trillion rows of records, i.e., 10PB+ in size. At the same time, it is able to serve 10m+ writes and 100k+ queries per second, while completing complex queries within hundreds of milliseconds.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Native Store Extension for SAP HANA</strong>
        <span class="accepted-authors">
            <span class="author">Reza Sherkat</span> (SAP SE),
            <span class="author">Colin Florendo</span> (SAP),
            <span class="author">Mihnea Andrei</span> (SAP SE),
            <span class="author">Rolando Blanco</span> (SAP SE),
            <span class="author">Adrian Dragusanu</span> (SAP SE),
            <span class="author">Amit Pathak</span> (SAP SE),
            <span class="author">Pushkar Khadilkar</span> (SAP SE),
            <span class="author">Neeraj Kulkarni</span> (SAP SE),
            <span class="author">Christian Lemke</span> (SAP SE),
            <span class="author">Sebastian Seifert</span> (SAP SE),
            <span class="author">Sarika Iyer</span> (Microsoft),
            <span class="author">Sasikanth Gottapu</span> (SAP SE),
            <span class="author">Robert Schulze</span> (SAP SE),
            <span class="author">Chaitanya Gottipati</span> (SAP SE),
            <span class="author">Nirvik Basak</span> (SAP SE),
            <span class="author">Yanhong Wang</span> (SAP SE),
            <span class="author">Vivek Kandiyanallur</span> (SAP SE),
            <span class="author">Santosh Pendap</span> (Salesforce.com Inc),
            <span class="author">Dheren Gala</span> (SAP SE),
            <span class="author">Rajesh Almeida</span> (SAP SE), and
            <span class="author">Prasanta Ghosh</span> (Microsoft)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            We present an overview of SAP HANA's Native Store Extension (NSE). This extension substantially increases database capacity allowing scales far beyond available system memory. NSE is based on a hybrid in-memory and paged column store architecture composed from data access primitives. These primitives enable the processing of hybrid columns using the same algorithms optimized for traditional HANA in-memory columns. Using only three key primitives, we effectively fabricated byte-compatible counterparts for complex memory resident data structures (e.g. dictionary and hash-index), compressed schemes (e.g. sparse and run-length encoding), and exotic data types (e.g. geo-spatial). We developed a new buffer cache which optimizes the management of paged resources by smart strategies sensitive to page type and access patterns. The buffer cache integrates with HANA’s new execution engine that builds pipelined prefetch requests to improve disk access patterns and hot buffer retention. A novel load unit configuration, along with a unified persistence format, allows the hybrid column store to dynamically switch between in-memory and paged data access to balance performance and storage economy according to application demands while reducing Total Cost of Ownership (TCO). A new heterogenous partitioning scheme supports a load unit specification at table, partition, and column level. Finally, a new advisor recommends optimal load unit configurations. Our experiments illustrate the performance and memory footprint improvements on typical customer scenarios.
        </span>
    </p>

    <p>
        <strong class="accepted-title">Experiences with Approximating Queries in Microsoft's Production Big-Data Clusters</strong>
        <span class="accepted-authors">
            <span class="author">Srikanth Kandula</span> (Microsoft Research),
            <span class="author">Kukjin Lee</span> (Microsoft),
            <span class="author">Surajit Chaudhuri</span> (Microsoft Research), and
            <span class="author">Marc T Friedman</span> (Microsoft)
        </span>
        <span class="accepted-abstract">
            <a class="accepted-abstract-action"></a>
            With the rapidly growing volume of data, it is more attractive than ever to leverage approximations to answer analytic queries. Sampling is a powerful technique which has been studied extensively from the point of view of facilitating approximation. Yet, there has been no large-scale study of effectiveness of sampling techniques in big data systems. In this paper, we describe an in-depth study of the sampling-based approximation techniques that we have deployed in Microsoft's big data clusters. We explain the choices we made to implement approximation, identify the usage cases, and study detailed data that sheds insight on the usefulness of doing sampling based approximation.
        </span>
    </p>

</section>
<?php
define('PageTitle', "Industrial Track Papers");
define('PageDescription', "List of accepted industrial track papers.");
?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "name": "Industrial Track Papers",
  "url": "https://vldb.org/2019/?papers-industrial",
  "description": "List of accepted industrial track papers.",
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [{
      "@type": "ListItem",
      "position": 1,
      "item": {
        "@id": "https://vldb.org/",
        "name": "VLDB"
      }
    },{
      "@type": "ListItem",
      "position": 2,
      "item": {
        "@id": "https://vldb.org/conference.html",
        "name": "Conferences"
      }
    },{
      "@type": "ListItem",
      "position": 3,
      "item": {
        "@id": "https://vldb.org/2019/",
        "name": "2019"
      }
    },{
      "@type": "ListItem",
      "position": 4,
      "item": {
        "@id": "https://vldb.org/2019/?program",
        "name": "Conference Program"
      }
    },{
      "@type": "ListItem",
      "position": 5,
      "item": {
        "@id": "https://vldb.org/2019/?papers-industrial",
        "name": "Industrial Track Papers"
      }
    }]
  }
}


</script>